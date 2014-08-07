<?php
namespace News\Controllers;

/**
 * @Prefix("admin/news")
 */
class NewsAdminController extends \Admin\Libs\Controller\EntityAdminController {
	public $_entity = 'News\Entities\News';
	public $_plural = 'news';

	public function __construct() {
		$this->_messages = array(
			'modified'			=>	__('News modified with success.'),
			'created'			=>	__('News created with success.'),
			'many_deleted'			=>	__('News modified with success.'),
			'deleted'			=>	__('News deleted with success.'),
			'unexisting'			=>	__('This news does not exist.'),
		);
		parent::__construct();
	}
	
	public function formConfigure($entity) {
		$form = $this->container->make('adminEntityForm', [$entity, $this]);
		
		return $form;
	}
}