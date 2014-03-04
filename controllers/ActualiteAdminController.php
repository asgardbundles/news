<?php
/**
@Prefix('admin/actualites')
*/
class ActualiteAdminController extends \Coxis\Admin\Libs\Controller\EntityAdminController {
	static $_entity = 'Coxis\News\Entities\Actualite';
	static $_entities = 'actualites';

	function __construct() {
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
		$form = new \Coxis\Admin\Libs\Form\AdminEntityForm($entity, $this);
		
		return $form;
	}
}