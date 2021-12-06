<?php 
class Cms618b887e921d2792412867_25f1eccc03496e3e4fc0b04896ba32e3Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $user = Auth::getUser();
    if ($user) {
        return Redirect::to('/');
    }
}
}
