<?php

namespace VulcainTechnology\Form\Http;

use Illuminate\Support\ServiceProvider;
use VulcainTechnology\Form\Http\Controllers\FormController;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('form', function() {
            return new FormController();
        });
    }
}
