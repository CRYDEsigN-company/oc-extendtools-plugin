<?php namespace Crydesign\Extendtools\FormWidgets;

use RainLab\Builder\Widgets\DefaultControlDesignTimeProvider;
use Backend\Classes\WidgetBase;

class UniversalDatePickerBuilder extends DefaultControlDesignTimeProvider
{
  protected $defaultControlsTypes = [
    'udatepicker',
  ];

  public function renderControlBody($type, $properties, $formBuilder)
  {
    if (!in_array($type, $this->defaultControlsTypes)) {
      return $this->renderUnknownControl($type, $properties);
    }

    trace_log($type);

    return $this->makePartial($type, 
      [
        'properties'=>$properties,
        'formBuilder' => $formBuilder
      ]
    );
  }
}

?>