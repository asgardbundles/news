<?php
class NewsAdminTest extends \Asgard\Http\Test {
	public function test() {
		News\Entities\News::create(array('id'=>1, 'title'=>'test', 'content'=>'test'));

		#admin
		$browser = $this->getBrowser();
		$browser->getSession()->set('admin_id', 1);

		$this->assertTrue($browser->get('admin/news')->isOK(), 'GET admin/news');

		$browser->get('admin/news/1/edit');
		$this->assertTrue($browser->submit('//form', 'admin/news/1/edit')->isOK());

		$this->assertTrue($browser->get('admin/news/1/edit/en')->isOK(), 'GET admin/news/:id/edit/:locale');
		$this->assertTrue($browser->get('admin/news/new')->isOK(), 'GET admin/news/new');
		$this->assertTrue($browser->get('news/1/test')->isOK(), 'GET news/:id/:slug');
		$this->assertTrue($browser->get('admin/news/1/delete')->isOK(), 'GET admin/news/:id/delete');
		
		#front
		$browser = $this->getBrowser();
		$this->assertTrue($browser->get('news')->isOK(), 'GET news');
		
	}
}
