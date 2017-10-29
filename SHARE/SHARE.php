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
