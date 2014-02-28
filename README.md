Demo 1.
===
__Hello World!__ 

[src](https://github.com/LitPHP/tutorial/tree/demo-hello)

this demo show the minimal code to run a lit app.

### Rewrite

config you web server, rewrite all request to `index.php`

apache

    <IfModule mod_rewrite.c>
        RewriteEngine on
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
    </IfModule>

nginx

    try_files $uri /index.php?$args;

