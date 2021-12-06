<?php 
class Cms6187d0ca83639806088039_123d1a3e4195b2935d30c633660cb217Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $user = Auth::getUser();
    if ($user == false) {
        return Redirect::to('/');
    }
}
}
