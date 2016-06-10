<?php

/**
 * @file
 * Contains \Drupal\routing_example\Routing\RouteSubscriber.
 */

namespace Drupal\routing_example\Routing;


use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $routes = array();
    // Declares a single route under the name 'routing_example.dynamic_route'.
    // Returns an array of Route objects.
    $routes['routing_example.dynamic_route'] = new Route(
    // Path to attach this route to:
      '/routing_example/dynamic-route',
      // Route defaults:
      array(
        '_controller' => '\Drupal\routing_example\Controller\RoutingExampleController::base',
        '_title' => 'Routing Example: Dynamic routes'
      ),
      // Route requirements:
      array(
        '_permission'  => 'access content',
      )
    );
    return $routes;
  }

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change path '/user/login' to '/login'.
    if ($route = $collection->get('user.login')) {
      $route->setPath('/login');
    }
    // Always deny access to '/user/logout'.
    // Note that the second parameter of setRequirement() is a string.
    if ($route = $collection->get('user.logout')) {
      $route->setRequirement('_access', 'FALSE');
    }
  }

}
