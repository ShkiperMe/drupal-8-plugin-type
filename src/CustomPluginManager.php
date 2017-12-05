<?php

namespace Drupal\custom_plugin;

use Drupal\Component\Plugin\Factory\DefaultFactory;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Manager for CustomPlugin.
 */
class CustomPluginManager extends DefaultPluginManager {

  /**
   * {@inheritdoc}
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Plugin/CustomPlugin',
      $namespaces,
      $module_handler,
      'Drupal\custom_plugin\CustomPluginPluginInterface',
      'Drupal\custom_plugin\Annotation\CustomPlugin'
    );
    $this->alterInfo('custom_plugin_info');
    $this->setCacheBackend($cache_backend, 'custom_plugin');
    $this->factory = new DefaultFactory($this->getDiscovery());
  }

}