<?php namespace silkRoad\Services\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title','desc','desc_left','desc_right','tariffs','additional_tariff_title1','additional_tariff_title2','additional_tariff_desc1','additional_tariff_desc2'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'silkroad_services_';

    protected $jsonable = ['content'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

      public $attachOne = [
      'service_img' => 'System\Models\File',
      'img' => 'System\Models\File'
    ];
}
