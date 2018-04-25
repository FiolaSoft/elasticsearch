<?php

declare(strict_types=1);

namespace Tests;

use FiolaSoft\Elasticsearch\DI\ElasticsearchExtension;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Ninjify\Nunjuck\TestCase\BaseTestCase;
use Tester\Assert;
use Tester\FileMock;

use const TEMP_DIR;

require_once __DIR__ . '/../../bootstrap.php';
class ConfigurationTest extends BaseTestCase
{
    public function testConfiguration() : void
    {
        $loader = new ContainerLoader(TEMP_DIR, true);
        $class  = $loader->load(function (Compiler $compiler) : void {
            $compiler->addExtension('extensions', new ElasticsearchExtension());
            $compiler->loadConfig(FileMock::create('
			extensions:
				elasticsearch:
					hosts:
					    - \'127.0.0.1\'
		', 'neon'));
        }, '1a');
/** @var Container $container */
        $container = new $class();
        Assert::type(Container::class, $container);
    }
}

(new ConfigurationTest())->run();
