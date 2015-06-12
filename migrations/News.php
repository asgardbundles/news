<?php
class News extends \Asgard\Migration\DBMigration {
	public function up() {
		$table = $this->container['config']['database.prefix'].'news';
		$this->schema->create($table, function($table) {
			$table->addColumn('id', 'integer', [
				'length' => 11,
				'autoincrement' => true,
			]);
			$table->addColumn('published', 'integer', [
				'length' => '1',
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
			$table->addColumn('title', 'string', [
				'length' => 255
			]);
			$table->addColumn('content', 'text');
			$table->addColumn('image', 'string', [
				'length' => 255
			]);

			$table->setPrimaryKey(['id']);
		});
	}
	
	public function down() {
		$this->schema->drop($this->container['config']['database.prefix'].'news');
	}
}