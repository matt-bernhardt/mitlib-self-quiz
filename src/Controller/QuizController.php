<?php

namespace Drupal\mitlib_self_quiz\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class QuizController extends ControllerBase {

	/**
	 * Display the custom quiz page.
	 *
	 * @return array
	 *   Return markup array.
	 */
	public function content() {
		$foo = [
			'#type' => 'markup',
			'#markup' => $this->t('Hello, updated custom quiz page!'),
		];
		$foo['#attached']['library'][] = 'mitlib_self_quiz/self_quiz';
		print_r( $foo );
		return $foo;
	}

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
