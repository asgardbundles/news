<?php
namespace Asgard\News\Entities;

class Actualite extends \Asgard\Core\Entity {
	public static $properties = array(
		'title',
		'content'	=>	'longtext',
		'image'	=>	array(
			'type'	=>	'file',
			'filetype'	=>	'image',
			'dir'	=>	'actualites',
			'required'	=>	false,
		),
	);
	
	public static $relations = array(	
	);
	
	public static $behaviors = array(
		'Asgard\Behaviors\PublishBehavior',
		'Asgard\Behaviors\MetasBehavior',
		'Asgard\Behaviors\SlugifyBehavior',
	);
	
	public function __toString() {
		return (string)$this->title;
	}

	public function url() {
		return \Asgard\Core\App::get('url')->url_for(array('Actualite', 'show'), array('id'=>$this->id, 'slug'=>$this->slug));
	}
}