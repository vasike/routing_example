<?php

/**
 * @file
 * Contains \Drupal\routing_example\Controller\RoutingController.
 */

namespace Drupal\routing_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class RoutingController.
 *
 * @package Drupal\routing_example\Controller
 */
class RoutingExampleController extends ControllerBase {
  /**
   * Routing base example.
   *
   * @return string
   *   Return a string.
   */
  public function base() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: Base')
    ];
  }

  /**
   * Routing example with a parameter.
   *
   * @return string
   *   Return a string.
   */
  public function parameter($param) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: Parameter. Current parameter : @param', ['@param' => $param]),
    ];
  }

  /**
   * Routing example with a parameter.
   *
   * @return string
   *   Return a string.
   */
  public function convertedParameter($converted_param, $param_desc = NULL) {
    $node = $converted_param;
    $param_text = $node->link($node->getTitle() . ' [ id: ' . $node->id() . ')');
    if (empty($param_desc)) {
      $param_desc = $this->t('Raw Parameter');
    }
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: %param_desc. Current parameter node : @param_text', ['%param_desc' => $param_desc, '@param_text' => $param_text]),
    ];
  }

  /**
   * Routing example with a parameter.
   *
   * @return string
   *   Return a string.
   */
  public function nodeConvertedParameter($node_converted_param) {
    return $this->convertedParameter($node_converted_param, $this->t('Node Converted Parameter'));
  }

  /**
   * Routing example with a parameter.
   *
   * @return string
   *   Return a string.
   */
  public function nodeTab($node) {
    return $this->convertedParameter($node, $this->t('Node Tab (local task)'));
  }

  /**
   * Routing example with a parameter.
   *
   * @return string
   *   Return a string.
   */
  public function customAccess() {
    return $this->base();
  }

  /**
   * Checks access for a custom access checker route.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user account.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   The access result.
   */
  public function checkAccess(AccountInterface $account) {
    // Check permissions and combine that with any custom access checking needed. Pass forward
    // parameters from the route and/or request as needed.
    return AccessResult::allowedIf($account->hasPermission('routing example permission'));
    // OR
    // return AccessResult::allowedIfHasPermission($account, 'routing example permission');
  }

  public function json() {
    $return = [
      'data1' => $this->t('Data test 1'),
      'data2' => $this->t('Data test 2'),
    ];
    // Create key/value array.
    return new JsonResponse($return);
  }

}
