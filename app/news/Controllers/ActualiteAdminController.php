<?php
namespace Asgard\News\Controllers;

/**
@Prefix('admin/actualites')
*/
class ActualiteAdminController extends \App\Admin\Libs\Controller\EntityAdminController {
	static $_entity = 'App\News\Entities\Actualite';
	static $_entities = 'actualites';

	public function __construct() {
		$this->_messages = array(
			'modified'			=>	__('Actualite modified with success.'),
			'created'			=>	__('Actualite created with success.'),
			'many_deleted'			=>	__('Actualites modified with success.'),
			'deleted'			=>	__('Actualite deleted with success.'),
			'unexisting'			=>	__('This actualite does not exist.'),
		);
		parent::__construct();
	}
	
	public function formConfigure($entity) {
		$form = new \App\Admin\Libs\Form\AdminEntityForm($entity, $this);
		
		return $form;
	}
}