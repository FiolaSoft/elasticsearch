<?php
declare(strict_types=1);

namespace FiolaSoft\Elasticsearch\DI;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Nette\DI\CompilerExtension;

class ElasticsearchExtension extends CompilerExtension
{
    /**
     * @var array
     */
    public $defaults = [
            'hosts'      =>  [
                    'localhost'
            ],

            /*
            This is effectively equal to: "https://username:password!#$?*abc@foo.com:9200/"
            [
                    'host' => 'foo.com',
                    'port' => '9200',
                    'scheme' => 'https',
                    'user' => 'username',
                    'pass' => 'password!#$?*abc'
            ],
            */
    ];

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