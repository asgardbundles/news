<?php
namespace App\News;

class Bundle extends \Coxis\Core\BundleLoader {
	public function load($queue) {
		parent::load();
	}

	public function run() {
		\Coxis\Admin\Libs\AdminMenu::$menu[0]['childs'][] = array('label' => 'Actualites', 'link' => 'actualites');
		\Coxis\Admin\Libs\AdminMenu::$home[] = array('img'=>\URL::to('actualite/icon.svg'), 'link'=>'actualites', 'title' => __('News'), 'description' => __('Les actualités'));
		parent::run();
	}
}
return new Bundle;