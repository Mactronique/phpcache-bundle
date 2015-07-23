# phpcache-bundle

## Install

```
php composer.phar require mactronique/phpcache-bundle "~1.0"
```


# Configuration

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
```