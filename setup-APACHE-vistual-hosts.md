## Setup Apache virtual hosts (Digital Ocean)

Reference: https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts

Prerequsites:

- [Create a non-root user](https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-14-04)
- [Create domain host names](https://www.digitalocean.com/community/tutorials/how-to-set-up-a-host-name-with-digitalocean)


## Install Apache

```bash
$ sudo apt-get update
$ sudo apt-get install apache2
```

## Create the directory structure

```bash
$ sudo mkdir -p /var/www/apples.com/public_html
$ sudo mkdir -p /var/www/oranges.com/public_html
```

## Permissions

```bash
# ownership
$ sudo chown -R $USER:$USER /var/www/apples.com/public_html
$ sudo chown -R $USER:$USER /var/www/oranges.com/public_html

# permission
$ sudo chmod -R 755 /var/www
```
The variable `$USER` takes the value of current user

## Populate content

```bash
$ vim /var/www/apples.com/public_html/index.html
$ vim /var/www/oranges.com/public_html/index.html
```

## Create new virtual host

- Virtual host files are the files that specify the actual configuration
- Apache comes with a default virtual host file called 000-default.conf

```bash
$ sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/apples.com.conf
```

Open it

```bash
$ sudo vim /etc/apache2/sites-available/apples.com.conf
```

Add

```bash
<VirtualHost *:80>
  ServerName apples.com
  ServerAlias www.apples.com
  DocumentRoot /var/www/apples.com/public_html
  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

**Repeat for other domains**

## Enable virtual host

```bash
$ sudo a2ensite apples.com.conf
$ sudo a2ensite oranges.com.conf
# restart server
$ sudo service apache2 restart
```
