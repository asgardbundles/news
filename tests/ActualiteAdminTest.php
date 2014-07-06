<?php
class NewsAdminTest extends \Asgard\Http\Test {
	public function test() {
		News\Entities\News::create(array('id'=>1, 'title'=>'test', 'content'=>'test'));

		$browser = $this->getBrowser();
		$browser->setSession('admin_id', 1);

		$browser->get('admin/news/1/edit');

		$this->assertTrue($browser->submit(0, 'admin/news/1/edit')->isOK());
	}
}
