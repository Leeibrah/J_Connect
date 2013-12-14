<?php
/**
 * Controls basic front end
 */
class FrontController extends \BaseController {

    function getIndex() {
        return $this->getHome();
    }
    function getHome(){
        return $this->getStatic('home');
    }
    function getAbout(){
        return $this->getStatic('about');
    }
    function getServices(){
        return $this->getStatic('services');
    }
    function getPricing(){
        return $this->getStatic('pricing');
    }
    function getBlog(){
        return $this->getStatic('blog');
    }
    function getContact(){
        return $this->getStatic('contact');
    }
    function getImg(){
       $img= Request::path();
        $path=public_path("assets/themes/flat/frontend/template_content/{$img}");   
        $image=File::get($path);  
        return Response::make($image, 200, array('content-type' => 'image/jpg'));
    }
    private function getStatic($name){
        $content=View::make("content.static.{$name}");
        return View::make('front_end.general', compact('content'));
        
    }
}
