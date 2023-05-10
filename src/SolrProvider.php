<?php

namespace ScoutEngines\Solr;

use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;
use Laravel\Scout\Scout;
use Solarium\Client;

class SolrProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        app(EngineManager::class)->extend('solr', function ($app) {
            return new SolrEngine;
        });
    }

}
