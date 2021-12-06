<?php namespace silkroad\Reviews\Models;

use Model;

/**
 * Model
 */
class Review extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name','surname','message'];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_reviews_reviews';

    protected $fillable = ['name','surname','address','email','message','pub'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
