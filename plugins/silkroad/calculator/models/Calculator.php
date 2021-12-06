<?php namespace silkroad\Calculator\Models;

use Model;

/**
 * Model
 */
class Calculator extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_calculator_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
