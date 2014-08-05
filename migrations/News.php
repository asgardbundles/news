<?php
class News extends \Asgard\Migration\DBMigration {
	public function up() {
		$table = $this->container['config']['database.prefix'].'news';
		$this->container['schema']->create($table, function($table) {
			$table->add('id', 'int(11)')
				->autoincrement()
				->primary();	
			$table->add('published', 'int(1)')
				->nullable();	
			$table->add('meta_title', 'varchar(255)')
				->nullable();	
			$table->add('meta_description', 'varchar(255)')
				->nullable();	
			$table->add('meta_keywords', 'varchar(255)')
				->nullable();	
			$table->add('slug', 'varchar(255)')
				->nullable();	
			$table->add('created_at', 'datetime')
				->nullable();	
			$table->add('updated_at', 'datetime')
				->nullable();	
			$table->add('title', 'varchar(255)')
				->nullable();	
			$table->add('content', 'text')
				->nullable();	
			$table->add('image', 'varchar(255)')
				->nullable();
		});
	}
	
	public function down() {
		$this->container['schema']->drop($this->container['config']['database.prefix'].'news');
	}
}