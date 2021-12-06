<?php 
class Cms6187cc71cd1b8013405206_8c19dec0349615b3e8dfdcace630fab5Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $user = Auth::getUser();
    if ($user) {
        return Redirect::to('/');
    }
}
}
