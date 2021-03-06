# Setup Mac OSX virtual hosts (Apache 2.4)

## Setup host names

Host names map domains to specific IP's. Those IP may point to localhost, or remote server.

Open host name configuration file

```shell
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

```shell
$ sudo vim /private/etc/apache2/extra/httpd-vhosts.conf
```

Setup

```ApacheConf
# default path is: /Library/WebServer/Documents

<VirtualHost *:80>
  DocumentRoot "/path/to/files/" ## content to be served
  ServerName apples.com
  ServerAlias www.apples.com
  ErrorLog "/private/var/log/apache2/mysite-error_log"
  CustomLog "/private/var/log/apache2/mysite-access_log" common
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "/path/to/files/" ## content to be served
  ServerName oranges.com
  ServerAlias www.oranges.com
  ErrorLog "/private/var/log/apache2/mysite-error_log"
  CustomLog "/private/var/log/apache2/mysite-access_log" common
</VirtualHost>
```

## Enable virtual host

Open httpd.conf file

```shell
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

```shell
$ sudo apachectl restart
```

**The end**
