<?php
namespace Controllers;

/**
 * @Prefix("admin/news")
 */
class NewsAdminController extends \Admin\Libs\Controller\EntityAdminController {
	protected $_entity = 'News\Entities\News';
	protected $_entities = 'news';

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
		$form = $this->app->make('adminEntityForm', [$entity, $this]);
		
		return $form;
	}
}