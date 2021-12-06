<?php namespace silkroad\OnlineStore\Models;

use Model;

/**
 * Model
 */
class Store extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name','desc'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_onlinestore_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
