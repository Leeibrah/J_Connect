<?php
/**
 * Controls basic front end
 */
class FrontController extends \BaseController {

    function getIndex() {
        $content='nothing to see here';
        return View::make('front_end.general', compact('content'));
    }

}
