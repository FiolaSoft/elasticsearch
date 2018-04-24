# FiolaSoft/Elasticsearch

This is integration of **elasticsearch/elasticsearch (elastic/elasticsearch-php)** into Nette framework.

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