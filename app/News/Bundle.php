<?php
namespace News;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run($container) {
		parent::run($container);

		$container['hooks']->hook('Asgard.Http.Start', function($chain, $request) {
			$chain->container['adminMenu']->add([
				'label' => __('News'),
				'link' => $chain->container['resolver']->url_for(['News\Controllers\NewsAdminController', 'index']),
			], '0.');
			$chain->container['adminMenu']->addHome([
				'img' => $request->url->to('bundles/news/icon.svg'),
				'link' => $chain->container['resolver']->url_for(['News\Controllers\NewsAdminController', 'index']),
				'title' => __('News'),
				'description' => __('All the news.')
			]);
		});
	}
}