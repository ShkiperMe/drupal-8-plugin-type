<?php

namespace Drupal\custom_plugin;

use Drupal\Component\Plugin\PluginBase;

abstract class CustomPluginPluginBase extends PluginBase implements CustomPluginPluginInterface {

  /**
   * Constructs a CustomPluginPluginBase object.
   *
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public function getId() {
    return $this->pluginDefinition['id'];
  }

  /**
   * {@inheritdoc}
   */
  public function getDefinition() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getItems() {
    return [];
  }

}