<?php
namespace Coxis\News;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\Coxis\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'Actualites', 'link' => 'actualites');
		\Coxis\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Coxis\Core\Facades\Coxis\Core\App::get('url')->to('actualite/icon.svg'), 'link'=>'actualites', 'title' => __('News'), 'description' => __('Les actualités'));
		parent::run();
	}
}