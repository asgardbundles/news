<?php
namespace Asgard\News\Tests;

class ActualiteAdminTest extends \PHPUnit_Framework_TestCase {
	public static function setUpBeforeClass() {
		if(!defined('_ENV_'))
			define('_ENV_', 'test');
		require_once(_CORE_DIR_.'core.php');
		\Asgard\Core\App::instance(true)->config->set('bundles', array(
			dirname(__DIR__),
		));
		\Asgard\Core\App::loadDefaultApp();

		\Asgard\Core\App::get('schema')->dropAll();
		\Asgard\Core\App::get('db')->import(__dir__.'/news.sql');
		\Asgard\Core\App::get('bundlesmanager')->loadEntityFixtures(dirname(__DIR__));
	}

	public function test1() {
		$browser = new \Asgard\Utils\Browser;
		$browser->setSession('admin_id', 1);

		$browser->get('admin/actualites/1/edit');

		$this->assertTrue($browser->submit(0, 'admin/actualites/1/edit')->isOK());
	}
}
