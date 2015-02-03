<?php
function __($key, $params=[]) {
	return \Asgard\Container\Container::singleton()['translator']->trans($key, $params);
}

function d() {
	call_user_func_array(['Asgard\Debug\Debug', 'dWithTrace'], array_merge([debug_backtrace()], func_get_args()));
}

require_once 'vendor/autoload.php';
foreach(spl_autoload_functions() as $function) {
	if(is_array($function) && $function[0] instanceof \Composer\Autoload\ClassLoader)
		$function[0]->setUseIncludePath(true);
}
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__.'/app');
set_include_path(get_include_path() . PATH_SEPARATOR . 'bundles/admin/app');
set_include_path(get_include_path() . PATH_SEPARATOR . 'bundles/wysiwyg/app');

#Bundles
$kernel = new \Asgard\Core\Kernel(__DIR__);
$kernel->addBundles([
	new \Asgard\Core\Bundle,
	new \Asgard\Data\Bundle,
	new \Asgard\Imagecache\Bundle,
	new \Wysiwyg\Bundle,
	new \Admin\Bundle,
	new \News\Bundle
]);
$container = $kernel->getContainer();
$container['errorHandler'] = new \Asgard\Debug\ErrorHandler;
$container['translator'] = new \Symfony\Component\Translation\Translator('en', new \Symfony\Component\Translation\MessageSelector);
$kernel->load();

#DB
$container['config']->set('database', [
	'driver' => 'sqlite',
	'database' => ':memory:',
]);

#set the EntitiesManager static instance for activerecord-like entities (e.g. new Article or Article::find())
\Asgard\Entity\EntityManager::setInstance($container['entityManager']);

#Database
$container['schema']->dropAll();
$mm = new \Asgard\Migration\MigrationManager(__DIR__.'/migrations', $container);
$mm->setDB($container['db']);
$mm->setSchema($container['schema']);
$mm->migrateFile(__DIR__.'/migrations/News.php');
$mm->migrateFile('bundles/admin/migrations/Admin.php');
$mm->migrateFile('vendor/asgard/data/migrations/Data.php');