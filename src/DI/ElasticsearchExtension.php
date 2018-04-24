<?php declare(strict_types = 1);

namespace FiolaSoft\Elasticsearch\DI;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Nette\DI\CompilerExtension;

class ElasticsearchExtension extends CompilerExtension
{

	/**
	 * @var array|string[]
	 */
    public $defaults = [
    		'hosts' => [
    				'localhost',
				],
		];

    /**
     * @return void
     */
    public function beforeCompile(): void
    {
        $config = $this->getConfig($this->defaults);

        $builder = $this->getContainerBuilder();

        $builder->addDefinition($this->prefix('clientBuilder'))
			->setClass(ClientBuilder::class)
            ->setFactory([ClientBuilder::class, 'create'])
            ->setArguments($config['hosts']);

        $builder->addDefinition($this->prefix('client'))
            ->setClass(Client::class)
            ->setFactory(['@' . $this->prefix('clientBuilder'), 'build']);
    }

}
