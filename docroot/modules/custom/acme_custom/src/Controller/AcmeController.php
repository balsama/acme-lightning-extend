<?php
/**
 * @file
 * Contains \Drupal\acme_custom\Controller\AcmeController.
 */

namespace Drupal\acme_custom\Controller;

use cebe\markdown\GithubMarkdown;
use Drupal\Core\Controller\ControllerBase;

class AcmeController extends ControllerBase {
  public function welcome() {
    $raw_text = file_get_contents($this->moduleHandler()->getModule('acme_custom')->getPath() . '/acme_landing_content.md');
    return array(
      '#markup' => (new GithubMarkdown())->parse($raw_text),
    );
  }
}
