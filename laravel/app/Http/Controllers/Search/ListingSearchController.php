<?php

namespace App\Http\Controllers\Search;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;

use App\Building;
use DB;

class ListingSearchController extends BaseController
{
    public function search()
    {
        $neighborhoodIds = Input::get('neighborhoods', []);
        $buildingTypes = Input::get('building_types', []);
        $bedroomMin = intval(Input::get('bedrooms_min', 0));
        $bedroomMax = intval(Input::get('bedrooms_max', 6));
        $bathRoomMin = intval(Input::get('bathrooms_min', 0));
        $bathRoomMax = intval(Input::get('bathrooms_max', 6));
        $priceMin = intval(Input::get('price_min', 0));
        $priceMax = intval(Input::get('price_max', 40000000));

        $listings = Building::query()
            ->whereIn(Building::NEIGHBORHOOD_ID, $neighborhoodIds)
            ->whereIn(Building::TYPE, $buildingTypes)
            ->whereBetween(Building::BEDROOMS_NUM, [$bedroomMin, $bedroomMax])
            ->whereBetween(Building::BATH_NUM, [$bathRoomMin, $bathRoomMax])
            ->whereBetween(Building::PRICE, [$priceMin, $priceMax])
            ->get();

        //return $listings;

        return view(
            'list',
            [
                'listings' => $listings
            ]
        );
    }
}
