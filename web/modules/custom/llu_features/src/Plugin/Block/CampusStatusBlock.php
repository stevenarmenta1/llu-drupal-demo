<?php

namespace Drupal\llu_features\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Campus Status' Block.
 * 
 * @Block(
 *   id = "campus_status_block",
 *   admin_label = @Translation("Campus Status"),
 *   category = @Translation("LLU Custom"),
 *  )
 */
class CampusStatusBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return [
        '#markup' => $this->t('<div class="campus-status"><strong>Current Status:</strong> Operational 🟢 Please follow health guidelines while on campus.</div>'),
        '#attached' => [
            'library' => [
                'llu_features/llu_styles',
            ],
         ],
        ];
    }
    
}