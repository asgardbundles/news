<?php
require __DIR__.'/../utils/FileManager.php';

\Asgard\Utils\FileManager::copy(__DIR__.'/app/news', 'app/news');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/news', 'tests/news');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/news', 'web/news');