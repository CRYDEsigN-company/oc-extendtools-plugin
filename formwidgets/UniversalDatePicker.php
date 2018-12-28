<?php namespace Crydesign\Extendtools\FormWidgets;

use Backend\Classes\FormWidgetBase;

class UniversalDatePicker extends FormWidgetBase
{
    // Получить локаль приложения и переключить языки

    const TIME_PREFIX = '___time_';

    public function widgetDetails()
    {
        return [
            'name' => 'Date picker',
            'description' => 'Add new form widget to backend'
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
        if ($this->formField->disabled) {
            return FormField::NO_SAVE_DATA;
        }
        if (!strlen($value)) {
            return null;
        }
        $timeValue = post(self::TIME_PREFIX.$this->formField->getName(false));
        if ($this->mode == 'datetime' && $timeValue) {
            $value .= ' '.$timeValue.':00';
        }
        else if ($this->mode == 'time') {
            $value = substr($value, 0, 5).':00';
        }
        return $value;
    }
}