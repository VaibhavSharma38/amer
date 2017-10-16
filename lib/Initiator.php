<?php

namespace xepan\amer;

class Initiator extends \Controller_Addon {
    
    public $addon_name = 'xepan_amer';

    function setup_admin(){

        $this->routePages('xepan_amer');
        $this->addLocation(array('template'=>'templates','js'=>'templates/js'))
        ->setBaseURL('../vendor/xepan/amer/');

        if(isset($this->app->cms_menu)){
            $this->app->cms_menu->addItem(['Amer','icon'=>' fa fa-cog'],'xepan_amer_customapp');
        }

        $this->app->addHook('entity_collection',[$this,'exportEntities']);
        return $this;

    }

    function setup_frontend(){
        $this->routePages('xepan_amer');
        $this->addLocation(array('template'=>'templates','js'=>'templates/js','css'=>'templates/css'))
        ->setBaseURL('./vendor/xepan/amer/');

         // $this->app->exportFrontEndTool('xepan\amer\Tool_PostList','Blog');
        
        return $this;
    }

    function exportEntities($app,&$array){
        // $array['PostCategory'] = ['caption'=>'PostCategory','type'=>'DropDown','model'=>'xepan\blog\Model_BlogPostCategory'];
    }

    
    function resetDB(){
    
    }
}