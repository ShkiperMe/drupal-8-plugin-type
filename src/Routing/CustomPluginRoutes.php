<?php

namespace Drupal\custom_plugin\Routing;

use Symfony\Component\Routing\Route;

/**
 * Provides routes for custom plugins.
 */
class CustomPluginRoutes {

  /**
   * Provides dynamic routes.
   *
   * @return \Symfony\Component\Routing\Route[]
   *   An array of route objects.
   */
  public function routes() {
    $routes = [];
    $plugin_service = \Drupal::service('plugin.manager.custom_plugin');
    foreach ($plugin_service->getDefinitions() as $plugin_id => $plugin) {
      $instance = $plugin_service->createInstance($plugin_id);

      $plugin_definition = $instance->getDefinition();
      $items = $instance->getItems();

      $routes["custom_plugin.{$plugin_id}"] = new Route("/admin/config/workflow/{$plugin_id}", [
        '_title' => (string) $plugin_definition['#title'],
        '_form' => '\Drupal\custom_plugin\Form\CustomPluginForm',
        'items' => $items,
      ], ['_permission'  => 'access content']);

    }
    return $routes;
  }

}
