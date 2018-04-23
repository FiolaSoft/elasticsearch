# FiolaSoft/ElasticSearch

This is integration of **elasticsearch/elasticsearch** into Nette framework.

## Installation
```yaml
extensions:
    elasticsearch: FiolaSoft\ElasticSearch\DI\ElasticSearchExtension
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


Find more about [elasticsearch/elasticsearch](https://github.com/elastic/elasticsearch-php).

And there are [ElasticSearch docs](https://www.elastic.co/guide/en/elasticsearch/client/php-api/5.0/index.html)

### TODO List
- tests & Travis

### Future plans
- tracy debug panel listing all queries, full result inspection *Yes, I take some inspiration from [kdyby/elasticsearch](https://github.com/Kdyby/ElasticSearch/)