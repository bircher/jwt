<?php

namespace Drupal\jwt\Authentication;

/**
 * Interface JwtGeneratorInterface
 *
 * @package Drupal\jwt\Authentication
 */
interface JwtGeneratorInterface {

  /**
   * Generate a new JWT token calling all event handlers.
   *
   * @return string|bool
   *   The encoded JWT token. False if there is a problem encoding.
   */
  public function generateToken();

}
