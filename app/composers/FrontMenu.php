<?php
/**
 * Populates the front end menu
 */
class FrontMenu {
	protected $can_be_active=array('home','about','services','pricing','contact','register_client');
    function compose($view){
        $view->with('home','#');
        Active_menu::highlight_menu(1, $this->can_be_active, $view);
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

