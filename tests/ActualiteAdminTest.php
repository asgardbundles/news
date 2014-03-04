<?php
if(!defined('_ENV_'))
	define('_ENV_', 'test');
require_once(_CORE_DIR_.'core.php');
Asgard\Core\App::load();

class ActualiteAdminTest extends PHPUnit_Framework_TestCase {
	public function setUp(){
		Asgard\DB\Schema::dropAll();
		DB::import(dirname(__FILE__).'/news.sql');
		Asgard\Core\BundlesManager::loadEntityFixturesAll();
	}
	public function tearDown(){}

	public function test1() {
		$browser = new Asgard\Utils\Browser;
		$browser->session['admin_id'] = 1;

		$browser->get('admin/actualites/1/edit');

		$this->assertTrue($browser->submit(0, 'admin/actualites/1/edit')->isOK());
	}
}
