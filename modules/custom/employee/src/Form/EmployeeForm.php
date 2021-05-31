<?php
    namespace Drupal\employee\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;
    use Drupal\Code\Database\Database;

    class EmployeeForm extends FormBase{
        /**
         * {@inheritdoc}
         */

         public function getFormId(){
             return 'create_employee';
         }

         /**
          * {@inheritdoc}
          */

          public function buildForm(array $form, FormStateInterface $form_state){
            $genderOptions = array(
                //'0'=>'Select Gender',
                'Male'=>'Male',
                'Female'=>'Female',
                'Other'=>'Other'
            );
            
            $form['name'] = array(
                '#type'=>'textfield',
                '#title'=>t('Name'),
                '#default_value'=>'',
                '#required'=>true,
                '#attributes'=>array(
                    'placeholder'=>'Name'
                )
            );

            $form['gender'] = array(
                '#type'=>'select',
                '#title'=>'Gender',
                '#options'=>$genderOptions,
                '#required'=>true
            );

            $form['about_employee'] = array(
                '#type'=>'textarea',
                '#title'=>'About Employee',
                '#default_value'=>'',
                '#required'=>true,
                '#attributes'=>array(
                    'placeholder'=>'About Employee description'
                )
            );

            $form['save'] = array(
                '#type'=>'submit',
                '#value'=>'Save Employee',
                '#button_type'=>'primary'
            );

            return $form;

        }

         /**
         * {@inheritdoc}
         */

        public function validateForm(array &$form, FormStateInterface $form_state){
            $name = $form_state->getvalue('name');
            if(trim($name) == ''){
                $form_state->setErrorByName('name',$this->t('Name Field is required'));
            }
            else if($form_state->getvalue('gender') == '0'){
                $form_state->setErrorByName('gender',$this->t('Gender Field is required'));
            }
            else if($form_state->getvalue('about_employee') == ''){
                $form_state->setErrorByName('about_employee',$this->t('About Field is required'));
            }
        }

        /**
         * {@inheritdoc}
         */

        public function submitForm(array &$form, FormStateInterface $form_state){

            $postData = $form_state->getValues();

            /**
             * REMOVE THE UNWANTED KEYS FORM POSTDATA
             */
             
            unset($postData['save'],$postData['form_build_id'],$postData['form_token'],$postData['form_id'],$postData['op']);

            $query = \Drupal::database();
            $query->insert('employees')->fields($postData)->execute();

            drupal_set_message(t('Employee Data Save Successfully'),'status',TRUE);
            //drupal_set_message(t('Employee Data Save Successfully'),'error',TRUE);
            //drupal_set_message(t('Employee Data Save Successfully'),'warning',TRUE);
            //drupal_set_message(t('Employee Data Save Successfully'),'info',TRUE);
        }

    }
?>
