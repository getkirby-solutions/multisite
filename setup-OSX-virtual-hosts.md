# Setup Mac OSX virtual hosts

## Setup host names

Host names map domains to specific IP's. Those IP may be localhost, or remote server.

Open host name configuration file

```bash
$ vim /private/etc/hosts
```

Setup

```ApacheConf
# serve 127.0.0.1, when XYZ.com is requested

127.0.0.1 ABC.com
127.0.0.1 XYZ.com
```

***

## Setup virtual hosts

Open vhosts configuration file

```bash
$ sudo vim /private/etc/apache2/extra/httpd-vhosts.conf
```

Setup

```ApacheConf
# default path is: /Library/WebServer/Documents

<VirtualHost *:80>
  DocumentRoot "/path/to/files/" ## content to be served
  ServerName apples.com
  ServerAlias www.apples.com
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "/path/to/files/" ## content to be served
  ServerName oranges.com
  ServerAlias www.oranges.com
</VirtualHost>
```

## Enable virtual host

Open httpd.conf file

```bash
$ sudo vim /etc/apache2/httpd.conf
```

Add (or uncomment)

```ApacheConf
# enable
LoadModule rewrite_module libexec/apache2/mod_rewrite.so
LoadModule php5_module libexec/apache2/libphp5.so

# setup
<Directory />
  Options Indexes FollowSymLinks Multiviews
  MultiviewsMatch Any
  Allow from all
  AllowOverride all
  Require all granted
</Directory>

# include settings file
Include /private/etc/apache2/extra/httpd-vhosts.conf
```

Restart server

```bash
$ sudo apachectl restart
```

**The end**
