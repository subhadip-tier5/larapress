<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class WordPressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    
    public function boot()
    {
        //
        //wp_enqueue_script('lara_add_to_cart', plugins_url('woocommerce/assets/js/frontend/add-to-cart.js'), array('jquery'));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if(file_exists(__DIR__ . '/../../../wp-load.php')) {
            require_once __DIR__ . '/../../../wp-load.php';
        } else 
            throw new \RuntimeException('WordPress wp-load.php file not found!');
    }
}
