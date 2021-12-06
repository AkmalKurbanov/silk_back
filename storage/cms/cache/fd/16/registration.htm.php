<?php 
class Cms6187cc9066d03649578451_8bb07cdfb374eb1c410a361c40654fa2Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $user = Auth::getUser();
    if ($user) {
        return Redirect::to('/');
    }
}
}
