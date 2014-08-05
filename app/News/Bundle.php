<?php
namespace News;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run($app) {
		parent::run($app);

		$app['hooks']->hook('Asgard.Http.Start', function($chain, $request) {
			$chain->app['adminMenu']->add([
				'label' => __('News'),
				'link' => $chain->app['resolver']->url_for(['News\Controllers\NewsAdminController', 'index']),
			], '0.');
			$chain->app['adminMenu']->addHome([
				'img' => $request->url->to('bundles/news/icon.svg'),
				'link' => $chain->app['resolver']->url_for(['News\Controllers\NewsAdminController', 'index']),
				'title' => __('News'),
				'description' => __('All the news.')
			]);
		});
	}
}