<?php

namespace Drupal\custom_plugin\Form;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;

/**
 * Provides a checklist form.
 */
class CustomPluginForm implements FormInterface {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_plugin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $items = []) {
    // Loop through groups.
    $groups = $items;
    foreach (Element::children($groups) as $group_key) {
      $group = &$groups[$group_key];
      $form[$group_key] = [
        '#title' => Xss::filter($group['#title']),
        '#type' => 'details',
        '#group' => 'checklistapi',
      ];
      if (!empty($group['#description'])) {
        $form[$group_key]['#description'] = Xss::filterAdmin($group['#description']);
      }

      // Loop through items.
      foreach (Element::children($group) as $item_key) {
        $item = &$group[$item_key];
        // Build title.
        $title = Xss::filter($item['#title']);
        // Set default value.
        $default_value = FALSE;
        // Get description.
        $description = (isset($item['#description'])) ? '<p>' . Xss::filterAdmin($item['#description']) . '</p>' : '';
        // Append links.
        $links = [];
        foreach (Element::children($item) as $link_key) {
          $link = &$item[$link_key];
          $links[] = \Drupal::l($link['#text'], $link['#url']);
        }
        if (count($links)) {
          $description .= '<div class="links">' . implode(' | ', $links) . '</div>';
        }
        // Compile the list item.
        $form[$group_key][$item_key] = [
          '#attributes' => ['class' => ['checklistapi-item']],
          '#default_value' => $default_value,
          '#description' => Xss::filterAdmin($description),
          '#title' => Xss::filterAdmin($title),
          '#type' => 'checkbox',
          '#group' => $group_key,
          '#parents' => ['checklistapi', $group_key, $item_key],
        ];
      }
    }

    // Actions.
    $form['actions'] = [
      '#type' => 'actions',
      '#weight' => 100,
      'save' => [
        '#button_type' => 'primary',
        '#type' => 'submit',
        '#value' => t('Save'),
      ],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {}

}
