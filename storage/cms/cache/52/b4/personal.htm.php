<?php 
class Cms61a50bb5f30cb578590379_82eeb87f7a20a776e4793866a3bf03b8Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $user = Auth::getUser();
    if ($user == false) {
        return Redirect::to('/');
    }
}
}
