<?php
/**
 * Selects the active menu
 */
class Active_menu {
	static function highlight_menu($segment,$can_be_active,&$view){
	    $segment = Request::segment($segment);
        array_walk($can_be_active,function($current) use($segment,&$view){
            if($segment==$current){
                $view->with("{$current}_active","class='active'");
            }
            else {
                $view->with("{$current}_active",'');
            }
        });
	}
}
