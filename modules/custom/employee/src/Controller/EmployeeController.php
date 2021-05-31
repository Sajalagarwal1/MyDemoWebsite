<?php
   namespace Drupal\employee\Controller;
   use Drupal\Core\Controller\ControllerBase;

   class EmployeeController extends ControllerBase{
       public function createEmployee(){
           $form = \Drupal::formBuilder()->getForm('Drupal\employee\Form\EmployeeForm');
           //$renderForm = \Drupal::service('renderer')->render($form);

           return [
               '#theme'=>'employee',
               '#items'=>$form,
               '#title'=>'Employee form'
           ];
       }
   }