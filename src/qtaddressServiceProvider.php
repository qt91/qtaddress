<?php

    namespace qt\qtaddress;

    use Illuminate\Support\ServiceProvider;

    class qtaddressServiceProvider extends ServiceProvider
    {
        /**
         * Perform post-registration booting of services.
         *
         * @return void
         */
        public function boot()
        {
            if (!$this->app->routesAreCached()) {
                require __DIR__ . '/routes.php';
            }

            $this->publishes([
                __DIR__ . '/migrations' => database_path('migrations')
            ], 'migrations');
        }

        /**
         * Register any package services.
         *
         * @return void
         */
        public function register()
        {
            //
        }
    }