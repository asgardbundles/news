<?php
if(!defined('_ENV_'))
	define('_ENV_', 'test');
require_once(_CORE_DIR_.'core.php');
Coxis\Core\App::load();

class ActualiteAdminTest extends PHPUnit_Framework_TestCase {
	public function setUp(){
		Coxis\DB\Schema::dropAll();
		DB::import(dirname(__FILE__).'/news.sql');
		Coxis\Core\BundlesManager::loadEntityFixturesAll();
	}
	public function tearDown(){}

	public function test1() {
		$browser = new Coxis\Utils\Browser;
		$browser->session['admin_id'] = 1;

		$browser->get('admin/actualites/1/edit');

		$this->assertTrue($browser->submit(0, 'admin/actualites/1/edit')->isOK());
	}
}
