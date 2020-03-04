<?php

namespace Presentation\WebUI\Common;

class WebUIServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        // Load common routes, translations and view
        $this->loadRoutesFrom(__DIR__ . '/Resources/Routes/main.php');

        $this->loadTranslationsFrom(__DIR__ . '/Resources/Lang', 'webui');
        
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'webui');
        
        // Load auth views
        $this->loadViewsFrom(__DIR__ . '/../Auth/Views', 'webui.auth');
    }
}
