<?php

namespace Drupal\testing_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom Block"),
 *   category = @Translation("Custom Block "),
 * )
 */
class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $output = "CUSTOM TESTING BLOCK";
    return [
        '#theme' => 'customblock',
        '#data' => $output,
    ];
  }

}