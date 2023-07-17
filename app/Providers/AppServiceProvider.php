<?php

namespace App\Providers;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Events\QueryExecuted;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::listen(function (QueryExecuted $query) {
            $dumpQuery = [
                'SQL'   =>  $query->sql,
                'BINDINGS'  =>  $query->bindings,
                'TIME(ms)'  =>  $query->time,
            ];
            Log::channel('query')->info(print_r($dumpQuery,true));
            // Log::debug(print_r($dumpQuery,true));
        });
    }
}
