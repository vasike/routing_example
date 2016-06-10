<?php

/**
 * @file
 * Contains \Drupal\routing_example\ParamConverter\RoutingExampleParamConverter.
 */

namespace Drupal\routing_example\ParamConverter;

use Drupal\Core\ParamConverter\ParamConverterInterface;
use Drupal\node\Entity\Node;
use Symfony\Component\Routing\Route;

/**
 * Class RoutingController.
 *
 * @package Drupal\routing_example\ParamConverter
 */
class RoutingExampleParamConverter implements ParamConverterInterface {
  public function convert($value, $definition, $name, array $defaults) {
    return Node::load($value);
  }

  public function applies($definition, $name, Route $route) {
    return (!empty($definition['type']) && $definition['type'] == 'converted_param');
  }
}
