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

Demo 2.
===
__Router Basic__

[diff](https://github.com/LitPHP/tutorial/compare/demo-hello...demo-router-basic) | [src](https://github.com/LitPHP/tutorial/tree/demo-router-basic)

this demo show how to route your app.

+ `return true;` within the route callback to break route chain
+ `Lit_Route_Regex` support route via regex on request uri

    + catch the regex match result with `$app->context(Lit_Route_Regex::MATCHES)`

+ set http status code via `$litHttpView->status`

Demo 3.
===
__Template, Layout, everything your VIEW__

[diff](https://github.com/LitPHP/tutorial/compare/demo-router-basic...demo-template-layout) | [src](https://github.com/LitPHP/tutorial/tree/demo-template-layout)

this demo show how to roll your View Layer.

+ implement `Lit_ITemplate` to adapt your template engine, providing the `render($template, $data)` method
+ extends `Lit_Http_View_Template`, override `data()` and `template()` method to provide $data and the template engine
+ create instance for you View class, use it as the Lit_Result
+ Layout maybe implemented by override `output()` method, to output some common part
