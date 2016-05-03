<?php
namespace News\Controller;

/**
 * @Prefix("news")
 */
class News extends \Asgard\Http\Controller {
	/**
	 * @Route("")
	 */
	public function indexAction(\Asgard\Http\Request $request) {
		$this->list = \News\Entity\News::published()->get();
	}

	/**
	 * @Route(":id/:slug")
	 */
	public function showAction(\Asgard\Http\Request $request) {
		if(!($this->news = \News\Entity\News::loadPublished($request['id'])))
			$this->notFound();

		$this->news->showMetas();
	}
}