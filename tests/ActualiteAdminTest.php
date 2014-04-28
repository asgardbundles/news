<?php
namespace Asgard\News\Tests;

class ActualiteAdminTest extends \Asgard\Core\Test {
	public function test1() {
		\App\News\Entities\Actualite::create(array('id'=>1, 'title'=>'test', 'content'=>'test'));

		$browser = $this->getBrowser();
		$browser->setSession('admin_id', 1);

		$browser->get('admin/actualites/1/edit');

		$this->assertTrue($browser->submit(0, 'admin/actualites/1/edit')->isOK());
	}
}
