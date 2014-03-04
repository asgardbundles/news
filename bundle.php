<?php
namespace Asgard\News;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run() {
		\Asgard\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Actualites', 'link' => 'actualites');
		\Asgard\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Asgard\Core\Facades\Asgard\Core\App::get('url')->to('actualite/icon.svg'), 'link'=>'actualites', 'title' => __('News'), 'description' => __('Les actualités'));
		parent::run();
	}
}