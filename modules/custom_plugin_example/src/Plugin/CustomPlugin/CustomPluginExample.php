<?php

/**
 * @file
 * Example of custom plugin.
 */
namespace Drupal\custom_plugin_example\Plugin\CustomPlugin;

use Drupal\custom_plugin\Annotation\CustomPlugin;
use Drupal\custom_plugin\CustomPluginPluginBase;
use Drupal\Core\Url;

/**
 * @CustomPlugin(
 *   id="example_checklist",
 * )
 */
class CustomPluginExample extends CustomPluginPluginBase {

  /**
   * Return plugin definition.
   */
  public function getDefinition() {
    return [
      '#title' => t('My Checklist API example'),
      '#description' => t('An example implementation of the Checklist API.'),
    ];
  }

  public function getItems() {
    return [
      'i_suck' => [
        '#title' => t('I suck'),
        '#description' => t('<p>Gain these skills to pass the <em><a href="http://headrush.typepad.com/creating_passionate_users/2005/10/getting_users_p.html">suck threshold</a></em> and start being creative with Drupal.</p>'),
        'install_configure' => [
          '#title' => t('Installation and configuration of Drupal core'),
          '#description' => t('Prepare for installation, run the installation script, and take the steps that should be done after the installation script has completed.'),
          'handbook_page' => [
            '#text' => t('Installation Guide'),
            '#url' => Url::fromUri('http://drupal.org/documentation/install'),
          ],
        ],
        'node_system' => [
          '#title' => t('Node system'),
          '#description' => t('Perform a variety of operations on one or more nodes.'),
          'handbook_page' => [
            '#text' => t('Manage nodes'),
            '#url' => Url::fromUri('http://drupal.org/node/306808'),
          ],
        ],
        'block_system' => [
          '#title' => t('Block system'),
          '#description' => t('Create blocks and adjust their appearance, shape, size and position.'),
          'handbook_page' => [
            '#text' => t('Working with blocks (content in regions)'),
            '#url' => Url::fromUri('http://drupal.org/documentation/modules/block'),
          ],
        ],
        'users' => [
          '#title' => t('Users, roles and permissions'),
          '#description' => t('Create and manage users and access control.'),
          'handbook_page' => [
            '#text' => t('Managing users'),
            '#url' => Url::fromUri('http://drupal.org/node/627158'),
          ],
        ],
        'contrib' => [
          '#title' => t('Installing contributed themes and modules'),
          '#description' => t('Customize Drupal to your tastes by adding modules and themes.'),
          'handbook_page' => [
            '#text' => t('Installing modules and themes'),
            '#url' => Url::fromUri('http://drupal.org/documentation/install/modules-themes'),
          ],
        ],
      ],
      'i_get_by' => [
        '#title' => t('I get by'),
        '#description' => t('<p>Gain these skills to pass the <em><a href="http://headrush.typepad.com/creating_passionate_users/2005/10/getting_users_p.html">passion threshold</a></em> and start kicking butt with Drupal.</p>'),
        'upgrade_patch_monitor' => [
          '#title' => t('Upgrading, patching, (security) monitoring'),
          'handbook_page_upgrading' => [
            '#text' => t('Upgrading from previous versions'),
            '#url' => Url::fromUri('http://drupal.org/upgrade'),
          ],
          'handbook_page_patching' => [
            '#text' => t('Applying patches'),
            '#url' => Url::fromUri('http://drupal.org/patch/apply'),
          ],
          'security_advisories' => [
            '#text' => t('Security advisories'),
            '#url' => Url::fromUri('http://drupal.org/security'),
          ],
          'handbook_page_monitoring' => [
            '#text' => t('Monitoring a site'),
            '#url' => Url::fromUri('http://drupal.org/node/627162'),
          ],
        ],
        'navigation_menus_taxonomy' => [
          '#title' => t('Navigation, menus, taxonomy'),
          'handbook_page_menus' => [
            '#text' => t('Working with Menus'),
            '#url' => Url::fromUri('http://drupal.org/documentation/modules/menu'),
          ],
          'handbook_page_taxonomy' => [
            '#text' => t('Organizing content with taxonomy'),
            '#url' => Url::fromUri('http://drupal.org/documentation/modules/taxonomy'),
          ],
        ],
        'locale_i18n' => [
          '#title' => t('Locale and internationalization'),
          'handbook_page' => [
            '#text' => t('Multilingual Guide'),
            '#url' => Url::fromUri('http://drupal.org/documentation/multilingual'),
          ],
        ],
        'customize_front_page' => [
          '#title' => t('Drastically customize front page'),
          'handbook_page' => [
            '#text' => t('Totally customize the LOOK of your front page'),
            '#url' => Url::fromUri('http://drupal.org/node/317461'),
          ],
        ],
        'theme_modification' => [
          '#title' => t('Theme and template modifications'),
          'handbook_page' => [
            '#text' => t('Theming Guide'),
            '#url' => Url::fromUri('http://drupal.org/documentation/theme'),
          ],
        ],
      ],
      'i_kick_butt' => [
        '#title' => t('I kick butt'),
        'contribute_docs_support' => [
          '#title' => t('Contributing documentation and support'),
          'handbook_page_docs' => [
            '#text' => t('Contribute to documentation'),
            '#url' => Url::fromUri('http://drupal.org/contribute/documentation'),
          ],
          'handbook_page_support' => [
            '#text' => t('Provide online support'),
            '#url' => Url::fromUri('http://drupal.org/contribute/support'),
          ],
        ],
        'content_types_views' => [
          '#title' => t('Content types and views'),
          'handbook_page_content_types' => [
            '#text' => t('Working with nodes, content types and fields'),
            '#url' => Url::fromUri('http://drupal.org/node/717120'),
          ],
          'handbook_page_views' => [
            '#text' => t('Working with Views'),
            '#url' => Url::fromUri('http://drupal.org/documentation/modules/views'),
          ],
        ],
        'actions_workflows' => [
          '#title' => t('Actions and workflows'),
          'handbook_page' => [
            '#text' => t('Actions and Workflows'),
            '#url' => Url::fromUri('http://drupal.org/node/924538'),
          ],
        ],
        'development' => [
          '#title' => t('Theme and module development'),
          'handbook_page_theming' => [
            '#text' => t('Theming Guide'),
            '#url' => Url::fromUri('http://drupal.org/documentation/theme'),
          ],
          'handbook_page_development' => [
            '#text' => t('Develop for Drupal'),
            '#url' => Url::fromUri('http://drupal.org/documentation/develop'),
          ],
        ],
        'advanced_tasks' => [
          '#title' => t('jQuery, Form API, security audits, performance tuning'),
          'handbook_page_jquery' => [
            '#text' => t('JavaScript and jQuery'),
            '#url' => Url::fromUri('http://drupal.org/node/171213'),
          ],
          'handbook_page_form_api' => [
            '#text' => t('Form API'),
            '#url' => Url::fromUri('http://drupal.org/node/37775'),
          ],
          'handbook_page_security' => [
            '#text' => t('Securing your site'),
            '#url' => Url::fromUri('http://drupal.org/security/secure-configuration'),
          ],
          'handbook_page_performance' => [
            '#text' => t('Managing site performance'),
            '#url' => Url::fromUri('http://drupal.org/node/627252'),
          ],
        ],
        'contribute_code' => [
          '#title' => t('Contributing code, designs and patches back to Drupal'),
          'handbook_page' => [
            '#text' => t('Contribute to development'),
            '#url' => Url::fromUri('http://drupal.org/contribute/development'),
          ],
        ],
        'professional' => [
          '#title' => t('Drupal consultant or working for a Drupal shop'),
        ],
        'chx_or_unconed' => [
          '#title' => t(
            'I\'m a <a href=":chx_url">chx</a> or <a href=":unconed_url">UnConeD</a>.', [
              ':chx_url' => 'http://drupal.org/user/9446',
              ':unconed_url' => 'http://drupal.org/user/10',
            ]
          ),
        ],
      ],
    ];
  }


}