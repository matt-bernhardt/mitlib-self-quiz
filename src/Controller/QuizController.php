<?php

namespace Drupal\mitlib_self_quiz\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class QuizController extends ControllerBase {

	/**
	 * Display the markup.
	 *
	 * @return array
	 *   Return markup array.
	 */
	public function settings() {
		return [
			'#type' => 'markup',
			'#markup' => $this->t('Hello, Quiz settings page!'),
		];
	}
}
