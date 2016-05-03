<?php
namespace News;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run(\Asgard\Container\ContainerInterface $container) {
		parent::run($container);

		$container['hooks']->hook('Asgard.Http.Start', function($chain, $request) {
			$chain->getContainer()['adminMenu']->add([
				'label' => __('News'),
				'link' => $chain->getContainer()['resolver']->url(['News\Controller\NewsAdmin', 'index']),
			], '0.');
			$chain->getContainer()['adminMenu']->addHome([
				'img' => $request->url->to('bundles/news/icon.svg'),
				'link' => $chain->getContainer()['resolver']->url(['News\Controller\NewsAdmin', 'index']),
				'title' => __('News'),
				'description' => __('All the news.')
			]);
		});
	}
}