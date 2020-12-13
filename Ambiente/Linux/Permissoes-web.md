# Configurar as permissões do /var/www/html

Adiciona seu user ao grupo do apache

sudo adduser ribafs www-data

sudo nano /usr/local/bin/perms

Troque ribafs pelo seu user

```bash
#!/bin/sh
clear;
echo "Aguarde enquanto configuro as permissões do /var/www/html/$1";
echo "";
find /var/www/html/$1/ -type d -exec chmod 775 {} \;
find /var/www/html/$1/ -type d -exec chmod ug+s {} \;
find /var/www/html/$1/ -type f -exec chmod 664 {} \;
chown -R ribafs:www-data /var/www/html/$1/
echo "";
echo "Concluído!";
```
sudo chmod +x /usr/local/bin/perms

Executando

Varrer a pasta /var/www/html/teste

Veja as permissões antes

ls -la /var/www/html/teste

Execute

sudo perms teste

Agora veja como ficaram as permissões de /var/www/html/teste

ls -la /var/www/html/teste

Varrer todo o /var/www/html

sudo perms


## Virtual Host

Gosto de criar um virtualhost em minha pasta de usuário, onde tenho mais permissões. Pra valer eu tenho uma partição /backup, onde crio a apsta www e crio o vistualhost nela, mas podemos também criar em

Troque ribafs pelo seu user

/home/ribafs/www

Que fica legal em termos de permissão

sudo nano /etc/hosts

127.0.0.1	backup

sudo nano /etc/apache2/sites-available/backup.conf
```bash
<VirtualHost *:80>
ServerAdmin ribafs@gmail.com
ServerName backup
DirectoryIndex index.php
DocumentRoot /home/ribafs/www
LogLevel warn
ErrorLog ${APACHE_LOG_DIR}/error.log
CustomLog ${APACHE_LOG_DIR}/access.log combined
<Directory /home/ribafs/www/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
    DirectoryIndex index.html index.php
</Directory>
</VirtualHost>
```
sudo a2ensite backup

sudo service apache2 reload

Criei outro script para ajustar as permissões em /home/ribafs/www

sudo nano /usr/local/bin/backup
```bash
#!/bin/sh
clear;
echo "Aguarde enquanto configuro as permissões do /home/ribafs/www/$1";
echo "";
find /home/ribafs/www/$1/ -type d -exec chmod 775 {} \;
find home/ribafs/www/$1/ -type d -exec chmod ug+s {} \;
find /home/ribafs/www/$1/ -type f -exec chmod 664 {} \;
chown -R ribafs:www-data home/ribafs/www/$1/
echo "";
echo "Concluído!";
```
sudo chmod +x /usr/local/bin/backup

Varrer a pasta /home/ribafs/www/teste

sudo backup teste

Varrer toda a pasta /home/ribafs/www

sudo backup

