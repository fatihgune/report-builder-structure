<?php

namespace App\Providers;

use App\ReportBuilder;
use Illuminate\Support\ServiceProvider;

class ReportBuilderProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $types = config('report-builder.sources');

        foreach ($types as $type => $repo) {
            $this->app->bind($type, function () use ($repo){
                $repo = $this->app->make($repo);
                return new ReportBuilder($repo);
            });
        }
    }
}
