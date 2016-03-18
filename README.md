# Simple CORS proxy

Proxy that allow you to access resources from other websites, by adding CORS headers to the proxied request.

## Usage
```
cd /path/to/cors-proxy
php -S 127.0.0.1:8080
```
Then, pass the website resource as parameter.


Exemples:
```http://127.0.0.1:8080/?get=http://exemple.org/path/to/resource.json```
