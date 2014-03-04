<?php
class Actualite extends \Coxis\Core\Entity {
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
		'Coxis\Behaviors\PublishBehavior',
		'Coxis\Behaviors\MetasBehavior',
		'Coxis\Behaviors\SlugifyBehavior',
	);
	
	public function __toString() {
		return (string)$this->title;
	}

	public function url() {
		return \Coxis\Core\App::get('url')->url_for(array('Actualite', 'show'), array('id'=>$this->id, 'slug'=>$this->slug));
	}
}