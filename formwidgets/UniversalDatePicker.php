<?php namespace Crydesign\Extendtools\FormWidgets;

use Backend\Classes\FormWidgetBase;

class UniversalDatePicker extends FormWidgetBase
{
    // Получить локаль приложения и переключить языки
    
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
            'element-ui.css'
        ]);
        $this->addJs([
            'vue.min.js',
            'element-ui.js',
            'locale/en.js',
            'locale/ru-RU.js'
        ]);
    }

    public function render(){
        $this->prepareVars();
        return $this->makePartial('widget');
    }

    public function prepareVars(){
        $this->vars['id'] = $this->getId();
        $this->vars['name'] = $this->getFieldName();
        $this->vars['value'] = $this->getLoadValue();
    }

    public function getSaveValue($value)
    {
        trace_log('cvcv'.input($this->getFieldName()));
        return $value;
    }
    public function onSave()
    {
        console.log('cvcv!!!'.$value);
        //throw new ValidationException(['name' => 'You must give a name!']);
    }

}