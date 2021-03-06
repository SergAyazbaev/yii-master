<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 29.10.2017
 * Time: 15:36
 */



<VirtualHost yii-master:80>
DocumentRoot "C:/xampp/htdocs/yii-master/frontend/web"
    ServerName yii-master
    ServerAlias www.yii-master

<Directory />
		Options Indexes FollowSymLinks
		AllowOverride All
		 Options Indexes MultiViews
		 AllowOverride None
		 Order allow,deny
		 Allow from all
</Directory>
</VirtualHost>
///////////////////////


Options +FollowSymLinks
IndexIgnore */*
RewriteEngine on

# Если запрос начинается с /admin, то заменяем на /backend/web/
RewriteCond %{REQUEST_URI} ^/admin
RewriteRule ^admin\/?(.*) /backend/web/$1

# Добавляем другой запрос /frontend/web/$1
RewriteCond %{REQUEST_URI} !^/(frontend/web|backend/web|admin)
RewriteRule (.*) /frontend/web/$1

# Если frontend запрос
RewriteCond %{REQUEST_URI} ^/frontend/web
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /frontend/web/index.php

# Если backend запрос
RewriteCond %{REQUEST_URI} ^/backend/web
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /backend/web/index.php

///////////////////////

======================================
Вариант #1
--------------------------------------
Сервер лицензии на своём ПК
======================================
1. Установить программу
2. Из папки "License service" установить файл, согласно разрядности вашей Windows, в удобную вам папку, к примеру "C:\activation"
3. Если всё сделано верно, то в списке процессов будут присутствовать: (они же будут стартовать при запуске ОС)

	- JetBrainsLicenseService.exe
	- JetBrainsLicenseServer.exe

7. Запустите программу >> Help >> Register >> License server, там вписать http://127.0.0.1:1017

Примечание:
1) Сервис эмулятора сервера будет висеть фоновым процессом и автоматически продлевать вашу лицензию либо каждые 48 часов при непрерывной работе, либо каждый раз при запуске IDE.
2) В папке, где установлен сервис, находится config.ini, тут можно изменить порт, на котором будет работать сервис (параметр -p) и имя пользователя, на которого будет выдаваться лицензия (параметр -u). По умолчанию сервис установится с параметрами "-p 1017 -u nnmclubber". После изменения config.ini нужно перезагрузить ОС для вступления в силу изменений.


======================================
Вариант #2
--------------------------------------
Сторонний сервер лицензии
======================================
Запустите программу >> Help >> Register >> License server, там вписать какой-то из:

	http://idea.iteblog.com/key.php
	http://jr.goxz.gq/
	http://www.aku.vn/idea
	http://elporfirio.com:1017
	http://jetbrains-server.ru:1017

======================================
Вариант #3
--------------------------------------
Ключ + блокировка проверки лицензии
======================================
1) Открыть на редактирование файл c:/Windows/System32/drivers/etc/hosts (могут понадобиться права администратора) и добавить в конец строку:

	127.0.0.1 account.jetbrains.com

2) Запустить программу и активировать ключом из файла key.txt (лицензия до 30.01.2018)



