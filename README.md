# Déploiement G-Tisel

## Requirements

- Ubuntu Server 16.04+ conseillé ou windows 10
- MySQL 5.7.8+
- PHP 7.2+
- Composer

## Récupération des sources

Il suffit de cloner le git suivant : 


**Attention : Les différentes branches correspondent à une utilisation précise (voir guide_bonnes_pratiques.md)**

```
$ git clone https://github.com/charleswona1/G-Tisel.git
```


**Instructions d'installation**

```
Se placer dans le répertoire de l’application (dossier enacp) :
```

## Installation

Le fichier .env ne doit être inclus dans aucun commit.
Les configurations pour la préprod et la production sont déjà établies, il n'y a donc rien à modifier de plus.
Sur la machine du développeur, en revanche il est à créer à la racine du projet et doit contenir les paramètres suivants :


**Remplacer tout ce qui commence par YOUR_xxxx par votre propre configuration de base de données**


```
APP_NAME=ENACP
APP_ENV=test
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000/
LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=enacp
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

#MAIL_DRIVER=
#MAIL_HOST=
#MAIL_PORT=
#MAIL_USERNAME=
#MAIL_PASSWORD=
#MAIL_ENCRYPTION=
#MAIL_FROM_ADDRESS=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Puis lancer : 

```
    $ composer install
    $ php artisan key:generate
    $ php artisan migrate --force
```