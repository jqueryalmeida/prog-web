# Configurar as permissões do /var/www/html

Por padrão o linux não permite que usuários comuns alterem ou criem arquivos em /var/www/html. Mesmo se criarmos um virtualhost em /home/ribafs ainda assim rpecisa de ajustes nas permissões e no dono dos arquivos. Para criar um arquivo no /var/www/html precisamos usar o sudo.

Uso estas configurações em meu desktop linux e também em servidores VPS para um uso mais confortável. Não são as ideais, mas já tornam a vida bem mais confortável do que o comportamento padrão das permissões, que somente permitem alterações com sudo ou root. E estas configurações oferecem segurança, pois ajustam as permissões de pastas para 755 e de arquivos para 644, ou seja, somente o dono e os do grupo podem escrever. Nunca devemos ajustar as permissões para 777. Se não sabemos como proceder devemos estudar e não apelar, especialmente se estivermos em um servidor.

## Adiciona seu user ao grupo do apache

Troque ribafs pelo seu user

sudo adduser ribafs www-data

## Criar o script

sudo nano /usr/local/bin/perms

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

## Dar permissão de execução

sudo chmod +x /usr/local/bin/perms

## Executando

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

Para mais conforto gosto de criar um virtualhost em minha pasta de usuário, onde temos mais permissões.

## Criarei o virtualhost na pasta

/home/ribafs/www

## Adicionar ao hosts

sudo nano /etc/hosts

127.0.0.1	backup

## Criar o script

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

## Habilitar
```
sudo a2ensite backup

## Reload no apache

sudo service apache2 reload

## Criar script para ajustar as permissões em /home/ribafs/www

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

