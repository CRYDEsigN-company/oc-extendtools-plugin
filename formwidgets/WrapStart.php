<?php namespace Crydesign\Extendtools\FormWidgets;

use Backend\Classes\FormWidgetBase;

class WrapStart extends FormWidgetBase
{
    // Получить локаль приложения и переключить языки

    protected $defaultAlias = 'wrapstart';

    public function widgetDetails()
    {
        return [
            'name' => 'Wrap Start',
            'description' => 'Wrap Start'
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
