<?php namespace Crydesign\Extendtools;

use System\Classes\PluginBase;
use System\Classes\CombineAssets;
use System\Classes\SystemController;
use Event;

class Plugin extends PluginBase
{
    public function register()
    {
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerFormWidgets()
    {
        return [
            'Crydesign\Extendtools\FormWidgets\UniversalDatePicker' => [
                'label' => 'Universal Date Picker',
                'code'  => 'udatepicker',
            ],
            'Crydesign\Extendtools\FormWidgets\UniversalTextField' => [
                'label' => 'Universal Text Field',
                'code'  => 'utext',
            ],
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function($controlLibrary) {
            $controlLibrary->AddJs([
                '$/crydesign/extendtools/assets/js/vue.js',
                '$/crydesign/extendtools/assets/js/element-ui.js',
                '$/crydesign/extendtools/assets/js/locale/en.js',
                '$/crydesign/extendtools/assets/js/locale/ru-RU.js',
                '$/crydesign/extendtools/assets/js/element-ui-init.js'
            ]);
            $controlLibrary->AddCss([
                '$/crydesign/extendtools/assets/css/element-ui.css',
            ]);
        });
    }
}
