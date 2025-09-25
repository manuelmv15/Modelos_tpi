
``` swift

📁 Estructura mínima

.
├── dockerfile
├── mvc_clase
│   ├── app
│   │   ├── controllers
│   │   ├── models
│   │   └── views
│   │       └── inicio.php
│   ├── autoloader.php
│   ├── lib
│   │   └── Route.php
│   ├── public
│   │   ├── .htaccess
│   │   └── index.php
│   └── routes
│       └── web.php
└── README.md

```

## .htaccess

``` text
Options -Multiviews
RewriteEngine On 
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [QSA,L]
```