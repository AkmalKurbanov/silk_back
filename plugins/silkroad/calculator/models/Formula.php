<?php namespace silkroad\Calculator\Models;

use Model;

/**
 * Model
 */
class Formula extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_calculator_formula';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
