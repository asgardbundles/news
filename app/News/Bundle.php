<?php
namespace News;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run($app) {
		parent::run();

		$app['adminMenu']->add([
			'label' => __('News'),
			'link' => $app['resolver']->url_for(['News\Controllers\NewsAdminController', 'index']),
		], '0.');
		$app['adminMenu']->addHome([
			'img' => $app['resolver']->to('news/icon.svg'),
			'link' => $app['resolver']->url_for(['News\Controllers\NewsAdminController', 'index']),
			'title' => __('News'),
			'description' => __('All the news.')
		]);
	}
}