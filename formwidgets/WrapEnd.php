<?php namespace Crydesign\Extendtools\FormWidgets;

use Backend\Classes\FormWidgetBase;

class WrapEnd extends FormWidgetBase
{
    // Получить локаль приложения и переключить языки

    protected $defaultAlias = 'wrapend';

    public function widgetDetails()
    {
        return [
            'name' => 'Wrap End',
            'description' => 'Wrap End'
        ];
    }

    public function init()
    {
    }

    public function render(){
        return $this->makePartial('widget');
    }

    public function prepareVars()
    {
    }

    public function getSaveValue($value)
    {
        return;
    }
}
