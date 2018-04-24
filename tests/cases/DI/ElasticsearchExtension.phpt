<?php

declare(strict_types=1);

use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use FiolaSoft\Elasticsearch\DI\ElasticsearchExtension;
use Tester\Assert;
use Tester\FileMock;

require_once __DIR__ . '/../../bootstrap.php';

test(function () {
    $loader = new ContainerLoader(TEMP_DIR, TRUE);
    $class = $loader->load(function (Compiler $compiler) {
        $compiler->addExtension('extensions', new ElasticsearchExtension());
        $compiler->loadConfig(FileMock::create('
			extensions:
				elasticsearch:
					hosts:
					    - \'127.0.0.1\'
		', 'neon'));
    }, '1a');

    /** @var Container $container */
    $container = new $class;
    Assert::type(Container::class, $container);
});