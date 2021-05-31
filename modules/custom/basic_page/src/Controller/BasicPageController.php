<?php
    namespace Drupal\basic_page\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class BasicPageController extends ControllerBase{
     	  public function basicPage(){
     		  return[
     		    '#title'=>'Basic Page Information',
            '#markup'=>'<h2>Our only Basic Page</h2>'
            //'#theme'=>'basic-page',
            //'#es'=>'is not their'
          ];
     	  }

     	  public function information(){
     		  return[
             '#title'=>'Information Page',
             //'#theme'=>'information-page',
             //'#items'=>'OUR INFORMATION PAGE'
             '#markup'=>'<h2>Our info Page</h2>',
             '#markup'=>'<h1>Name: SAJAL AGARWAL<br>EMAIL ID: Sajalagarwal2668@gmail.com</h1>'
     		  ];
     	  }
    }

?>