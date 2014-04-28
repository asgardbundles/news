<?php
namespace App\News\Controllers;

/**
@Prefix('actualites')
*/
class ActualiteController extends \Asgard\Core\Controller {
	/**
	@Route('')
	*/
	public function indexAction($request) {
		$this->actualites = \App\News\Entities\Actualite::published()->get();
	}

	/**
	@Route(':id/:slug')
	*/
	public function showAction($request) {
		if(!($this->actualite = \App\News\Entities\Actualite::loadPublished($request['id'])))
			$this->notfound();

		$this->actualite->showMetas();
		\Asgard\Seo\SEO::canonical($this, $this->actualite->url());
	}
}