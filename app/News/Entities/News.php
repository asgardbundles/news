<?php
namespace Asgard\News\Entities;

class News extends \Asgard\Entity\Entity {
	public static function definition($definition) {
		$definition->properties = array(
			'title' => array(
				'required' => true
			),
			'content' => array(
				'type' => 'longtext',
				'required' => true,
			),
			'image'	=>	array(
				'type'	=>	'file',
				'filetype'	=>	'image',
				'dir'	=>	'news',
				'required'	=>	false,
			),
		);

		$definition->behaviors = array(
			new \Asgard\Behaviors\PublishBehavior,
			new \Asgard\Behaviors\MetasBehavior,
			new \Asgard\Behaviors\SlugifyBehavior,
			new \Asgard\Orm\OrmBehavior,
		);
	}
	
	public function __toString() {
		return (string)$this->title;
	}

	public function url() {
		return \Asgard\Container\Container::singleton()['resolver']->url_for(array('News\Controllers\NewsController', 'show'), array('id'=>$this->id, 'slug'=>$this->slug()));
	}
}