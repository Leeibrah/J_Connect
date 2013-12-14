<?php
/**
 * Controls admin area
 */
class BackController extends \BaseController {

    function getIndex() {
        return $this->getDashboard();

    }
    function getDashboard(){
        return $this->_staticPage('work_progress');
    }
    function getTasks(){
        return $this->_staticPage('todo');
    }
    function getCalendar(){
        return $this->_staticPage('calendar');
    }
    function getMessages(){
         return $this->_staticPage('inbox');
    }
    function getNotifications(){
        return $this->_staticPage('blank');
    }
    function getMarked(){
        return $this->_staticPage('blank');
    }
    function getSearch(){
        return $this->_staticPage('search');
    }
    /**
     * Load a generic static view
     */
    protected function _staticPage($name){
        $content= View::make("back_end.widgets.{$name}");
        
        return View::make('back_end.general',compact('content'));
    }
    function getImg() {
        $img = Request::path();
        $img=str_replace('admin/', '', $img);
        $img=str_replace('admin/', '', $img);
        //die($img);
        $path = public_path("assets/themes/flat/admin/template_content/{$img}");
        $image = File::get($path);
        return Response::make($image, 200, array('content-type' => 'image/jpg'));
    }

}
