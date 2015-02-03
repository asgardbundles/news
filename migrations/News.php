<?php
class News extends \Asgard\Migration\DBMigration {
	public function up() {
		$table = $this->container['config']['database.prefix'].'news';
		$this->container['schema']->create($table, function($table) {
			$table->addColumn('id', 'integer', [
				'integer' => 11,
				'autoincrement' => true,
			]);
			$table->addColumn('published', 'string', [
				'length' => 255
			]);
			$table->addColumn('meta_title', 'string', [
				'length' => 255
			]);
			$table->addColumn('meta_description', 'string', [
				'length' => 255
			]);
			$table->addColumn('meta_keywords', 'string', [
				'length' => 255
			]);
			$table->addColumn('slug', 'string', [
				'length' => 255
			]);
			$table->addColumn('created_at', 'datetime');
			$table->addColumn('updated_at', 'datetime');
			$table->addColumn('title', 'string', [
				'length' => 255
			]);
			$table->addColumn('content', 'text');
			$table->addColumn('password', 'string', [
				'length' => 255
			]);
		});
	}
	
	public function down() {
		$this->container['schema']->drop($this->container['config']['database.prefix'].'news');
	}
}