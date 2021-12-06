<?php namespace silkRoad\Faq\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['question','answer'];
    
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_faq_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
