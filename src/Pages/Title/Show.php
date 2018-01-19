<?php
/**
 * Holds the home page.
 * @package Miiverse
 */

namespace Miiverse\Pages\Title;

use Miiverse\CurrentSession;

/**
 * Home page.
 * @package Miiverse
 * @author Repflez
 */
class Show extends Page
{
	/**
	 * Serves the site index.
	 */
	public function init() {
		if (CurrentSession::$user === 0) {
			// No user, redirect them to the welcome page
			redirect(route('gate.welcome'));
		} else {
			// There's a user in the system, login to the community index
			redirect(route('community.index'));
		}
	}
}
