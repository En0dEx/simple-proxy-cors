# Proxy pour le SI

Permets de développer sur Ionic en utilisant le browser, sans avoir le problème de CORS (Access-Control-Allow-Origin).

## Usage
```
$ cd /path/to/proxy-si
$ php -S 127.0.0.1:8080
```

Ensuite, pour accéder à une ressource du SI :
```http://127.0.0.1:8080/index.php?get=http://url-du.si/resource.xml```
