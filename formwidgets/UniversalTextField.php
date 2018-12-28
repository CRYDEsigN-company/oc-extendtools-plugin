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

    public function render(){
        $this->prepareVars();
        return $this->makePartial('widget');
    }

    public function prepareVars(){
        $this->vars['id'] = $this->getId();
        $this->vars['name'] = $this->getFieldName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['app'] = str_replace("-", "", $this->getId());
    }

    public function getSaveValue($value)
    {
        return $value;
    }
}