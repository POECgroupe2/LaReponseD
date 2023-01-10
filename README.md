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
- mettre sans commentaires dans à la fin .env : MAILER_DSN=smtp://adresseipdevotremachine:1025 (ex : MAILER_DSN=smtp://192.169.0.12:1025)
(sur windows on trouve l'ip de la machine avec ipconfig) ou ifconfig (linux ou essayer sur powershell)
Un exemple de mon fichier .env:

###> symfony/mailer ###
##MAILER_DSN=smtp://quizz_usr_maildev:25
###(192.168.1.48 c'est ma machine)
MAILER_DSN=smtp://192.168.1.48:1025
###< symfony/mailer ###

acces à maildev ds votre navigateur à l'adresse:  http://adresseipdevotremachine:1080 ( ex: http://192.169.0.12:1080 )
 vérifier que dans config/packages/messenger.yaml la partie:
 
         routing:
            #Symfony\Component\Mailer\Messenger\SendEmailMessage: async (cette ligne doit être commentée comme ici)
            Symfony\Component\Notifier\Message\ChatMessage: async
            Symfony\Component\Notifier\Message\SmsMessage: async

            # Route your messages to the transports
            # 'App\Message\YourMessage': async
