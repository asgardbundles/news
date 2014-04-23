<?php
require_once 'paths.php';
require _CORE_DIR_.'core.php';
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/news', _DIR_.'app/news');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/news', _DIR_.'tests/news');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/news', _DIR_.'web/news');

\Asgard\Orm\MigrationsManager::addMigrationFile(__DIR__.'/migrations/News.php');
\Asgard\Orm\MigrationsManager::migrate('News');
