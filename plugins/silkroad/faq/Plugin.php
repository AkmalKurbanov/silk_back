<?php namespace silkRoad\Faq;
use Lang;
use Carbon\Carbon;


use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }


    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'rudate' => function($time, $format) {
                    if(! $time instanceof Carbon) {
                        $time = Carbon::parse($time);
                    }
  $monthsPlural = array('Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
                        $format = str_replace('%BP', $monthsPlural[$time->month-1], $format);

                        $months = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
                        $format = str_replace('%B', $months[$time->month-1], $format);
                  

                    return $time->formatLocalized($format);
                }
            ]
        ];
    }
}
  





