# FiolaSoft/Elasticsearch
This is integration of **elasticsearch/elasticsearch (elastic/elasticsearch-php)** into Nette framework.

-----

**Build status**

[![Build Status](https://travis-ci.org/FiolaSoft/elasticsearch.svg?branch=master)](https://travis-ci.org/FiolaSoft/elasticsearch)
[![Coverage Status](https://coveralls.io/repos/github/FiolaSoft/elasticsearch/badge.svg?branch=master)](https://coveralls.io/github/FiolaSoft/elasticsearch?branch=master)
![License](https://img.shields.io/github/license/FiolaSoft/elasticsearch.svg)

**Packagist stats**

![Packagist Downloads](https://img.shields.io/packagist/dt/FiolaSoft/elasticsearch.svg)
![Packagist Downloads per month](https://img.shields.io/packagist/dm/FiolaSoft/elasticsearch.svg)
![Packagist](https://img.shields.io/packagist/v/FiolaSoft/elasticsearch.svg)
![Packagist Pre Release](https://img.shields.io/packagist/vpre/FiolaSoft/elasticsearch.svg)

## Installation
```yaml
extensions:
    elasticsearch: FiolaSoft\Elasticsearch\DI\ElasticsearchExtension
```

## Configuration
#### Minimal configuration
```yaml
elasticsearch:
    hosts:
      - 'localhost'
```
#### Advanced configuration
```yaml
elasticsearch:
    hosts:
        -
            host: 'localhost'
            port: 9200
            scheme: 'https'
            user: 'foo'
            pass: 'bar'
```

**NOTE:** The `host` is required, others are recommanded, but not necessary.


Find out more about [elasticsearch/elasticsearch (elastic/elasticsearch-php)](https://github.com/elastic/elasticsearch-php).

And there is [Elasticsearch docs](https://www.elastic.co/guide/en/elasticsearch/client/php-api/5.0/index.html)

### TODO

### Future plans
- tracy debug panel listing all queries, full result inspection *Yes, I take some inspiration from [kdyby/elasticsearch](https://github.com/Kdyby/ElasticSearch/)