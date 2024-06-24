<?php

namespace App\Console\Commands;

use App\Services\Airtable;
use App\Services\Sessionize;
use Illuminate\Console\Command;

class PermanentCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:permanent-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Permanently Caches Provider data (for archival purposes)';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {

        // Pass in a null ttl to permanently store in cache
        Airtable::getSponsors(null);
        Sessionize::getSessions(null);
        Sessionize::getSpeakers(null);
    }
}
