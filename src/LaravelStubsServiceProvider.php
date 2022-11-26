<?php

declare(strict_types = 1);

namespace Amirhf\LaravelStubs;

use Amirhf\LaravelStubs\Console\Commands\StubsPublishCommand;
use Illuminate\Support\ServiceProvider;

class LaravelStubsServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([StubsPublishCommand::class]);
        }
    }
}
