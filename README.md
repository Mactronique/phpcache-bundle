# phpcache-bundle

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
			name: memcached
			options:
				-
					server: 127.0.0.1
					port: 11211
					sharing: 100
        -
            name: "null"
```

# Contributing

Please fork main repo and send a pull request with your change.

Thanks your in advance !
