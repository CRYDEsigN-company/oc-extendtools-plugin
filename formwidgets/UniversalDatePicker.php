<?php namespace Crydesign\Extendtools\FormWidgets;

use Backend\Classes\FormWidgetBase;

class UniversalDatePicker extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'Multiselect',
            'description' => 'Field for Multiselect'
        ];
    }

    public function loadAssets()
    {
        $this->addCss([
            'vue-datepicker-local.css'
        ]);
        $this->addJs([
            'vue.min.js',
            'vue-datepicker-local.js'
        ]);
    }

    public function render(){
        return $this->makePartial('widget');
    }

    public function prepareVars(){
    }
}