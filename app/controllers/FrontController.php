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
    function getChoose(){
        return $this->getStatic('choose');
    }
    function getLogin(){
        return $this->_staticTemp('login');
    }
    function getContractor(){
        return $this->_staticTemp('contractor');
    }
    function getClient(){
        return $this->_staticTemp('client');
    }
    function getRegister(){
        return $this->_staticTemp('register');
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

    protected function _staticTemp($name){
        $content= View::make("front_end.registration.{$name}");
        
        return View::make('front_end.registration.general',compact('content'));
    }
}
