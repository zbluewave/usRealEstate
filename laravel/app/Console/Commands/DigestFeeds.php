<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Packages\FeedDigests\SampleCsvFileDigest;

class DigestFeeds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:digest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Digest Feed';


    private $sampleCsvFileDigest;

    public function __construct(SampleCsvFileDigest $sampleCsvFileDigest)
    {
        $this->sampleCsvFileDigest = $sampleCsvFileDigest;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->sampleCsvFileDigest->digest();
    }
}
