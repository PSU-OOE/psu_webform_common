<?php

namespace Drupal\psu_webform_common;

use Drupal\Core\Security\TrustedCallbackInterface;

/**
 * Trusted callbacks for select other element types.
 */
class SelectOtherCallbacks implements TrustedCallbackInterface {

  /**
   * Moves the error to a different render element.
   */
  public static function preRender(array $build) {
    $build['#error_no_message'] = TRUE;
    unset($build['select']['#error_no_message']);
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks() {
    return ['preRender'];
  }

}
