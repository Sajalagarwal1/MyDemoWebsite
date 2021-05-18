<?php
     namespace Drupal\basic_page\Controller;
     use Drupal\Core\Controller\ControllerBase;

     class BasicPageController extends ControllerBase{

     	public function basicPage(){
     		return[
     		'#title'=>'Basic Page Information',
            '#markup'=>'<h2>This Is Our Basic Page</h2>'
            ];
     	}

     	public function information(){
     		return[
            //'#title'=>'Information Page',
            //'#theme'=>'information_page',
          //   '#items'=>'This Is A Information Page'

            '#title'=>'Information',
            '#markup'=>'<h2>This Is Our infoasic Page</h2>'
     		];
     	}
     }

?>