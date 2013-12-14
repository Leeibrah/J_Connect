<?php
/**
 * Populates the front end menu
 */
class FrontMenu {
	protected $can_be_active=array('home','about','services','pricing','contact');
    function compose($view){
        $view->with('home','#');
        $this->_active_menu($view);
    }
    protected function _active_menu(&$view)
    {
        $segment = Request::segment(1);
        array_walk($this->can_be_active,function($current) use($segment,&$view){
            if($segment==$current){
                $view->with("{$current}_active","class='active'");
            }
            else {
                $view->with("{$current}_active",'');
            }
        });
    }
}

