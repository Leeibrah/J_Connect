<?php
/**
 * Composer for the admin side menu
 */
class BackMenu {
	protected $can_be_active=array('dashboard','search','marked','tasks','calendar','notifications','messages');
    function compose($view){
        Active_menu::highlight_menu(2, $this->can_be_active, $view);
    }    

}
