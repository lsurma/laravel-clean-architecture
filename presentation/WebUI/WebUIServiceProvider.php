<?php

namespace Presentation\WebUI;

class WebUIServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        // Load common routes, translations and view
        $this->loadRoutesFrom(__DIR__ . '/Common/Resources/Routes/main.php');

        $this->loadTranslationsFrom(__DIR__ . '/Common/Resources/Lang', 'webui');
        
        $this->loadViewsFrom(__DIR__ . '/Common/Resources/Views', 'webui');
        
        // Load auth views
        $this->loadViewsFrom(__DIR__ . '/Auth/Views', 'webui.auth');
    }
}
