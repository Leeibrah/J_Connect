<?php
/**
 * Populates the front end menu
 */
class FrontMenu {
	
    function compose($view){
        $view->with('home','#');
    }
}
