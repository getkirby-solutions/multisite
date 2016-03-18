## Setup Apache virtual hosts (Digital Ocean)

Prerequsites:

- [Create a non-root user](https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-14-04)
- [Create domain host names](https://www.digitalocean.com/community/tutorials/how-to-set-up-a-host-name-with-digitalocean)


## Install Apache

```
$ sudo apt-get update
$ sudo apt-get install apache2
```

## Create the directory structure

```
$ sudo mkdir -p /var/www/example.com/public_html
$ sudo mkdir -p /var/www/test.com/public_html
```

## Permissions

```
## ownership
$ sudo chown -R $USER:$USER /var/www/example.com/public_html
$ sudo chown -R $USER:$USER /var/www/test.com/public_html

## permission
$ sudo chmod -R 755 /var/www
```
The variable `$USER` takes the value of current user

## Populate content

```
$ vim /var/www/example.com/public_html/index.html
```

## Create new virtual host

- Virtual host files are the files that specify the actual configuration
- Apache comes with a default virtual host file called 000-default.conf

```bash
$ sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/apples.com.conf
```

Open it

```
$ sudo vim /etc/apache2/sites-available/apples.com.conf
```

Add

```bash
<VirtualHost *:80>
  ServerAdmin admin@example.com
  ServerName example.com
  ServerAlias www.example.com
  DocumentRoot /var/www/example.com/public_html
  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

**Repeat for other domains**

## Enable virtual host

```
$ sudo a2ensite example.com.conf
$ sudo a2ensite test.com.conf
$ sudo service apache2 restart
```
