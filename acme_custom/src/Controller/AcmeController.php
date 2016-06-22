<?php
/**
 * @file
 * Contains \Drupal\acme_custom\Controller\AcmeController.
 */

namespace Drupal\acme_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

class AcmeController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Welcome to Lightning + Acme Custom!'),
    );
  }
}
