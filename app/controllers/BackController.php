<?php
/**
 * Controls admin area
 */
class BackController extends \BaseController {

    function getIndex() {
        $content = "Nothing to see here";
        return View::make('back_end.general');
    }

    function getImg() {
        $img = Request::path();
        $img=str_replace('admin/', '', $img);
        //die($img);
        $path = public_path("assets/themes/flat/admin/template_content/{$img}");
        $image = File::get($path);
        return Response::make($image, 200, array('content-type' => 'image/jpg'));
    }

}
