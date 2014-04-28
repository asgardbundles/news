<?php
require_once 'paths.php';
require_once _VENDOR_DIR_.'autoload.php'; #composer autoloader
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/news', _DIR_.'app/news');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/ActualiteAdminTest.php', _DIR_.'tests/ActualiteAdminTest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/news', _DIR_.'web/news');

\Asgard\Orm\Libs\MigrationsManager::addMigrationFile(__DIR__.'/migrations/News.php');
\Asgard\Orm\Libs\MigrationsManager::migrate('News');
