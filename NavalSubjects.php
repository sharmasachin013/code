<?php

declare(strict_types=1);

namespace Drupal\varun\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * NAVAL SUBJECTS style plugin.
 *
 * @ViewsStyle(
 *   id = "varun_naval_subjects",
 *   title = @Translation("NAVAL SUBJECTS"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_varun_naval_subjects",
 *   display_types = {"normal"},
 * )
 */
final class NavalSubjects extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
