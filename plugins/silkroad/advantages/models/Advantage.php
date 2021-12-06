<?php namespace silkRoad\Advantages\Models;

use Model;

/**
 * Model
 */
class Advantage extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title','desc'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_advantages_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
      'advantage_img' => 'System\Models\File'
    ];
}
