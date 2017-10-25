<?php

namespace App\Packages\FeedDigests;

use App\City;
use App\Neighborhood;
use App\State;
use App\Building;

class SampleCsvFileDigest
{
    const FILE_PATH = '/tmp/sample_feed_digest.csv';

    const NAME = 'name';
    const FULL_ADDRESS = 'full_address';
    const ADDRESS = 'address';
    const CITY = 'city';
    const STATE = 'state';
    const ZIP = 'zip';
    const IMAGES = 'images';
    const UNITS = 'units';
    const STORIES = 'stories';
    const YEAR_BUILT = 'year_built';
    const BUILDING_TYPE = 'building_type';
    const NEIGHBORHOOD = 'neighborhood';
    const AMENITIES = 'amenities';
    const DATE = 'date';
    const UNIT = 'unit';
    const PRICE = 'price';
    const BEDS = 'beds';
    const BATHS = 'baths';
    const SQ_FEET = 'sq_feet';
    const COMMON_CHARGE = 'common_charges';
    const MONTHLY_TAXES = 'monthly_taxes';
    const MAINTENANCE = 'maintenance';
    const AGENCY_COMPANY = 'agent_company';
    const AGENT_PHONE = 'agent_phone';
    const UNIT_IMAGES = 'unit_images';
    const UNIT_DESCRIPTION = 'unit_description';

    private $columnsMap = array();

    public function digest()
    {
        $this->readCsvFile(self::FILE_PATH, function(array $row) {
            $stateId = $this->getStateId($row[$this->columnsMap[self::STATE]]);
            $cityId = $this->getCityId($row[$this->columnsMap[self::CITY]], $stateId);
            $neighborhoodId = $this->getNeighborhoodId($row[$this->columnsMap[self::NEIGHBORHOOD]], $cityId);
            //var_dump($row);

            $this->getBuildingId(
                $row[$this->columnsMap[self::NAME]],
                $row[$this->columnsMap[self::ADDRESS]],
                $neighborhoodId,
                $row[$this->columnsMap[self::ZIP]],
                $row[$this->columnsMap[self::STORIES]],
                $row[$this->columnsMap[self::UNITS]],
                $row[$this->columnsMap[self::YEAR_BUILT]],
                $row[$this->columnsMap[self::BUILDING_TYPE]]
            );
        });
    }

    private function getBuildingId($name, $address, $neighborhoodId, $zip, $stories, $units, $yearBuilt, $type)
    {
        $name = ucwords($name);
        $address = ucwords($address);
        $zip = strtolower($zip);
        $stories = intval($stories) ? : 1;
        $units = intval($units) ? : 1;
        $yearBuilt = intval($yearBuilt) ? : null;
        $type = strtolower($type);

        $buildingModel = Building::query()->where(Building::NAME, '=', $name)
            ->where(Building::ADDRESS, '=', $address)
            ->where(Building::NEIGHBORHOOD_ID, '=', $neighborhoodId)
            ->first();
        if (!$buildingModel) {
            $buildingModel = new Building();
            $buildingModel->{Building::NAME} = $name;
            $buildingModel->{Building::ADDRESS} = $address;
            $buildingModel->{Building::ZIP} = $zip;
            $buildingModel->{Building::NEIGHBORHOOD_ID} = $neighborhoodId;
            $buildingModel->{Building::UNITS} = $units;
            $buildingModel->{Building::STORIES} = $stories;
            $buildingModel->{Building::YEAR_BUILT} = $yearBuilt;
            $buildingModel->{Building::TYPE} = $type;
            $buildingModel->save();
        }
        return $buildingModel->{Building::ID};
    }

    private function getStateId($state)
    {
        $state = strtoupper($state);
        $stateModel = State::query()->where(State::ID, '=', $state)->first();
        if (!$stateModel) {
            $stateModel = new State();
            $stateModel->{State::ID} = $state;
            $stateModel->{State::NAME} = $state;
            $stateModel->save();
        }
        return $stateModel->{State::ID};
    }

    private function getCityId($city, $stateId)
    {
        $city = ucwords($city);
        $cityModel = City::query()->where(City::NAME, '=', $city)->where(City::STATE, '=', $stateId)->first();
        if (!$cityModel) {
            $cityModel = new City();
            $cityModel->{City::NAME} = $city;
            $cityModel->{City::STATE} = $stateId;
            $cityModel->save();
        }
        return $cityModel->{City::ID};
    }

    private function getNeighborhoodId($neighborhood, $cityId)
    {
        $neighborhood = ucwords($neighborhood);
        $neighborhoodModel = Neighborhood::query()->where(Neighborhood::NAME, '=', $neighborhood)
            ->where(Neighborhood::CITY_ID, '=', $cityId)
            ->first();
        if (!$neighborhoodModel) {
            $neighborhoodModel = new Neighborhood();
            $neighborhoodModel->{Neighborhood::NAME} = $neighborhood;
            $neighborhoodModel->{Neighborhood::CITY_ID} = $cityId;
            $neighborhoodModel->save();
        }
        return $neighborhoodModel->{Neighborhood::ID};
    }

    private function readCsvFile($path, callable $callback)
    {
        $file = fopen($path, 'r');
        $this->columnsMap = array_flip(fgetcsv($file)); //get rid of first line
        while($row = fgetcsv($file)) {
            $callback($row);
        }
        fclose($file);
    }
}
