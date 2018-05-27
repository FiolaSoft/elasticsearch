# Elasticsearch
## Table of Content
- [Installation - how to install](#installation)
- [Usage - how to register](#usage)
- [Configuration - how to configure](#configuration)

## Installation
Via composer:
```bash
composer require fiolasoft/elasticsearch
```

## Usage
Register extension in your `config.neon`:
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
