<?php

namespace Drupal\custom_plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

interface CustomPluginPluginInterface extends PluginInspectionInterface {

  /**
   * Plugin ID.
   */
  public function getId();

  /**
   * Plugin definition.
   */
  public function getDefinition();

  /**
   * Plugin items.
   */
  public function getItems();

}