<?php namespace Crydesign\Extendtools;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
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
                'code' => 'udatepicker',
            ],
        ];
    }
}
