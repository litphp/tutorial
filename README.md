Demo 1.
===
__Hello World!__

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

Demo 2.
===
__Router Basic__

this demo show how to route your app.

+ `return true;` within the route callback to break route chain
+ `Lit_Route_Regex` support route via regex on request uri

    + catch the regex match result with `$app->context(Lit_Route_Regex::MATCHES)`

+ set http status code via `$litHttpView->status`

