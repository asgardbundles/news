<?php
namespace Asgard\News;

class Bundle extends \Asgard\Core\BundleLoader {
	public function load($queue) {
		$queue->addBundles(array(
			new \Asgard\Orm\Bundle,
			new \Asgard\Db\Bundle,
			new \Asgard\Files\Bundle,
			new \Asgard\Validation\Bundle,
		));

		parent::load($queue);
	}

	public function run() {
		\App\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Actualites', 'link' => 'actualites');
		\App\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Asgard\Core\App::get('url')->to('news/icon.svg'), 'link'=>'actualites', 'title' => __('News'), 'description' => __('Les actualités'));
		parent::run();
	}
}