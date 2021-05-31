<?php
    namespace Drupal\test_p\Controller;
    //use Drupal\Core\Controller\ControllerBase;

    class testController{ //extends ControllerBase{
        public function testpage(){
          $element = array(
            '#theme' => 'myth',
            '#item' =>'this ',
          );
          return $element;
          /*return[
            '#title' => 'my',
            '#markup' => 'this is test  ddddd',
          ]; */
        }
          
    }