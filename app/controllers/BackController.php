<?php
/**
 * Controls admin area
 */
class BackController extends \BaseController {

    function getIndex() {
        $content = "Nothing to see here";
        return View::make('back_end.general');
    }

}
