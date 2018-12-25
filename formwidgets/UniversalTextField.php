<?php namespace Crydesign\Extendtools\FormWidgets;

use Backend\Classes\FormWidgetBase;

class UniversalTextField extends FormWidgetBase
{
    // Получить локаль приложения и переключить языки

    public function widgetDetails()
    {
        return [
            'name' => 'Universal TextField',
            'description' => 'Add Text field to backend'
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
        return $value;
    }
}