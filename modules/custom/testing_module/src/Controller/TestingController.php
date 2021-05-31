<?php

namespace Drupal\testing_module\Controller;

//Use Drupal\Core\Controller\ControllerBase;

class TestingController {
    public function listing() {
        $element =array(
            '#theme' => 'mytempla',
            '#data' => 'hello jiii',
        );
        return $element;
    }
}
?>