<?php

/**
 * @file
 * Contains \Drupal\routing_example\Access\RoutingExampleAccess.
 */

namespace Drupal\routing_example\Access;

use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Class RoutingController.
 *
 * @package Drupal\routing_example\Controller
 */
class RoutingExampleAccess implements AccessInterface {
  /**
   * Checks access for a custom access checker route.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user account.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   The access result.
   */
  public function access(AccountInterface $account) {
    // Check permissions and combine that with any custom access checking needed. Pass forward
    // parameters from the route and/or request as needed.
    return AccessResult::allowedIf($account->hasPermission('routing example permission'));
    // OR
    // return AccessResult::allowedIfHasPermission($account, 'routing example permission');
  }

}
