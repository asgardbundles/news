<?php
namespace News\Controllers;

/**
 * @Prefix("news")
 */
class NewsController extends \Asgard\Http\Controller {
	/**
	 * @Route("")
	 */
	public function indexAction(\Asgard\Http\Request $request) {
		$this->news = \News\Entities\News::published()->get();
	}

	/**
	 * @Route(":id/:slug")
	 */
	public function showAction(\Asgard\Http\Request $request) {
		if(!($this->news = \News\Entities\News::loadPublished($request['id'])))
			$this->notFound();

		$this->news->showMetas();
		\Asgard\Seo\SEO::canonical($this, $this->news->url());
	}
}