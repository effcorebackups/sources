server: nginx
os: Mac
php: 80
https: yes
url: https://effcore/category/категория?key=value&ключ=значение

$_SERVER
---------------------------------------------------------------------
- CONTENT_LENGTH: %%_CONTENT_LENGTH
- CONTENT_TYPE: %%_CONTENT_TYPE
- DOCUMENT_ROOT: /var/www
- DOCUMENT_URI: /category/категория
- FCGI_ROLE: RESPONDER
- GATEWAY_INTERFACE: CGI/1.1
- HTTPS: on
- HTTP_ACCEPT: %%_HTTP_ACCEPT
- HTTP_ACCEPT_ENCODING: %%_HTTP_ACCEPT_ENCODING
- HTTP_ACCEPT_LANGUAGE: %%_HTTP_ACCEPT_LANGUAGE
- HTTP_CACHE_CONTROL: %%_HTTP_CACHE_CONTROL
- HTTP_CONNECTION: %%_HTTP_CONNECTION
- HTTP_COOKIE: %%_HTTP_COOKIE
- HTTP_HOST: effcore
- HTTP_USER_AGENT: %%_HTTP_USER_AGENT
- PHP_SELF: /index.php
- QUERY_STRING: key=value&%D0%BA%D0%BB%D1%8E%D1%87=%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5
- REDIRECT_STATUS: 200
- REMOTE_ADDR: 127.0.0.1
- REMOTE_PORT: %%_REMOTE_PORT
- REQUEST_METHOD: GET
- REQUEST_SCHEME: https
- REQUEST_TIME: %%_REQUEST_TIME
- REQUEST_TIME_FLOAT: %%_REQUEST_TIME_FLOAT
- REQUEST_URI: /category/%D0%BA%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F?key=value&%D0%BA%D0%BB%D1%8E%D1%87=%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5
- SCRIPT_FILENAME: /var/www/index.php
- SCRIPT_NAME: /index.php
- SERVER_ADDR: 127.0.0.1
- SERVER_NAME: effcore
- SERVER_PORT: 443
- SERVER_PROTOCOL: HTTP/1.1
- SERVER_SOFTWARE: nginx/1.21.2

$_GET
---------------------------------------------------------------------
- key: value
- ключ: значение