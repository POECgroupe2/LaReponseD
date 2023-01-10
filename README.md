# Quizz

## Prérequis

- Environnement LAMP
- PHP 8.1
- NPM

## Installation

- un petit coup de :
  
```php
composer install
```

- et de :

```php
npm install
```

- on fait un build :

```php
npm run build
```

- Mode 007 :

```php
npm run watch
```

- Création BDD:
  
```php
php bin/console doctrine:database:create
```

- Migration:
  
```php
php bin/console doctrine:migration:migrate
```

- Fixture:
  
```php
php bin/console doctrine:fixture:load    
```
- Maildev sans docker : installer maildev avec: npm install -g maildev
- Run maildev dans un powershell: maildev --smtp 25 --web-ip 192.168.1.48 --ip 192.168.1.48 
- 
