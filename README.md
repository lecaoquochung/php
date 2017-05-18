# PHP Learning Projects

# Dependencies
- Download composer https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

# PHP
## Syntax

### Variable

### String

### Array

#### Array Sort
- http://php.net/manual/en/function.sort.php
```
$output = array_values(array_filter(array_unique(Hash::extract($logSeotrackings,'{n}.LogSeotracking.seotracking_category_id')));
sort($output);
```

### Function

# FUELPHP
- Init fuel php http://fuelphp.com/docs/installation/instructions.html
```
curl get.fuelphp.com/oil | sh
oil create <project_name>
```
- Composer
```
php composer.phar create-project fuel/fuel fuel
```
