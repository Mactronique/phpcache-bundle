# phpcache-bundle

[![Dependency Status](https://www.versioneye.com/user/projects/55c267d86537620017002ace/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55c267d86537620017002ace)
[![Latest Stable Version](https://poser.pugx.org/mactronique/phpcache-bundle/v/stable)](https://packagist.org/packages/mactronique/phpcache-bundle)
[![Latest Unstable Version](https://poser.pugx.org/mactronique/phpcache-bundle/v/unstable)](https://packagist.org/packages/mactronique/phpcache-bundle)
[![License](https://poser.pugx.org/mactronique/phpcache-bundle/license)](https://packagist.org/packages/mactronique/phpcache-bundle)

## Install

```
php composer.phar require mactronique/phpcache-bundle "~1.0"
```


# Configuration

## Register Bundle

Add in your `app/AppKernel.php` :

```
new Mactronique\Bundle\PhpCacheBundle\MactroniquePhpCacheBundle(),
```

## Write sementic configuration

Add in you `app/config/config.yml`

``` yml
mactronique_php_cache:
    drivers:
        -
            name: xcache
        -
            name: redis
            options:
                    host: 127.0.0.1
                    port: 6379
                    password: ''
                    database: 1
                    timeout: 1
		-
			name: memcached
			options:
				-
					server: 127.0.0.1
					port: 11211
					sharing: 100
        -
            name: "null"
```

# Use

In controller : 
```
// Set value into key for 30 seconds
$this->get('mactronique_cache.phpcache')->set('key', 'value', 30);

// Set value into key
$this->get('mactronique_cache.phpcache')->set('key', 'value');

//get key
$this->get('mactronique_cache.phpcache')->get('key');

//check if key exists
$this->get('mactronique_cache.phpcache')->exists('key');

//remove key
$this->get('mactronique_cache.phpcache')->remove('key');
```
# Contributing

Please fork main repo and send a pull request with your change.

Thanks your in advance !
