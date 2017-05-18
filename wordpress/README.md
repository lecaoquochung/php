# Wordpress CI Development
- Manage wordpress source code version with composer and git for CI development

# Dependencies
- Wordpress, Composer, Git

# Inital 
- composer.json
```
"repositories": [
        {
            "type": "package",
            "package": {
                "name": "wordpress",
                "type": "webroot",
                "version": "4.7.4",
                "dist": {
                    "type": "zip",
                    "url": "https://github.com/WordPress/WordPress/archive/4.7.4.zip"
                },
                "require" : {
                    "fancyguy/webroot-installer": "1.0.0"
                }
            }
        }
    ],
    "require": {
        "wordpress": "4.7.4",
        "fancyguy/webroot-installer": "1.0.0"
    },
    "extra": {
        "webroot-dir": "public/wp",
        "webroot-package": "wordpress"
    }
```

# Configuration
- Init
```
composer install
cp -R public/wp/{wp-content,index.php,wp-config-sample.php} public/ 
mv public/wp-config-sample.php public/wp-config.php
```

- Customization
```
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
```

- Defaut theme
```
define('WP_DEFAULT_THEME', 'mytheme');
```

# ENV
- database 
```
DB_NAME
DB_USER
DB_PASSWORD
DB_HOST
DB_CHARSET
DB_COLLATE
```
- keys & salts
```
AUTH_KEY
SECURE_AUTH_KEY
LOGGED_IN_KEY
NONCE_KEY
AUTH_SALT
SECURE_AUTH_SALT
LOGGED_IN_SALT
NONCE_SALT
```