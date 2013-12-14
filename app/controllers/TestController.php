<?php
/**
 * The test controller
 */
class TestController extends BaseController {
	
    function getIndex(){
        return View::make('back_end.general');
    }
}
