<?php namespace Silkroad\Reviews\Components;

use Cms\Classes\ComponentBase;
use Silkroad\Reviews\Models\Review as ModelReview;

class Review extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Отзывы',
            'description' => 'Отзывы клиентов...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onReview()
    {
        $data = Input();

        $review = new ModelReview();
        $review->fill($data);
        $review->save();


  return [
    '#reviewForm'];

    }
}
