# Setup Mac OSX virtual hosts

## Setup host names

Host names map domains to specific IP's. Those IP may be localhost, or remote server.

Open host name configuration file

```
$ vim /private/etc/hosts
```

Setup

```
# serve 127.0.0.1, when XYZ.com is requested

127.0.0.1 ABC.com
127.0.0.1 XYZ.com
```

***

## Setup virtual hosts

Open vhosts configuration file

```
$ vim /private/etc/apache2/extra/httpd-vhosts.conf
```

Setup

```
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

```
$ vim /etc/apache2/httpd.conf
```

Add (or uncomment)

```
# Virtual hosts
Include /private/etc/apache2/extra/httpd-vhosts.conf
```

Restart server

```
$ sudo apachectl restart
```

**The end**
