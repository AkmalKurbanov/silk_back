<?php 
class Cms6187d09e2611d947713289_59865458f0dfe835e96c6e624b98aec4Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $user = Auth::getUser();
    if ($user == false) {
        return Redirect::to('/');
    }
}
}
