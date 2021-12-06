<?php namespace silkroad\Reviews;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Silkroad\Reviews\Components\Review' => 'review'
        ];
    }

    public function registerSettings()
    {
    }
}
