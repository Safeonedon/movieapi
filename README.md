# movieapi
A movie api module 

## demo

https://dev.samih.info/

email: safouane@gmail.com

password: safouane@gmail.com

## Instalation
To install t, simply run these following commands:

get composer packages
``` bash
composer require install
```

get npm packages
``` bash
npm install
```

``` bash
npm run build
```

run migration command
``` bash
php artisan migrate
```
## Instalation

to get movies from api run
``` bash
php artisan fetch:cron
```
for daily fetch you can use this command with a cron job command

``` bash
* * 1 * * sh  usr/bin/php  /routetoproject/artisan fetch:cron
```
