<?php
namespace News\Entities;

class News extends \Asgard\Entity\Entity {
	public static function definition(\Asgard\Entity\Definition $definition) {
		$definition->properties = array(
			'title' => array(
				'required' => true
			),
			'content' => array(
				'type' => 'text',
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
			new \Asgard\Orm\ORMBehavior,
		);
	}
	
	public function __toString() {
		return (string)$this->title;
	}

	public function url() {
		return \Asgard\Container\Container::singleton()['resolver']->url(array('News\Controllers\NewsController', 'show'), array('id'=>$this->id, 'slug'=>$this->slug()));
	}
}