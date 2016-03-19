# Setup MAMP virtual hosts

## Setup host names

Host names map domains to specific IP's. Those IP may be localhost, or remote server.

Open host name configuration file

```bash
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

```shell
$ vim /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```

Setup

```
<VirtualHost *:80>
  DocumentRoot "/Applications/Mamp/htdocs/" ## content to be served
  ServerName apples.com
  ServerAlias www.apples.com
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "/Applications/Mamp/htdocs/" ## content to be served
  ServerName oranges.com
  ServerAlias www.oranges.com
</VirtualHost>
```

## Enable virtual host

Open httpd.conf file

```
$ vim /Applications/MAMP/conf/apache/httpd.conf
```

Add (or uncomment)

```
# Virtual hosts
Include /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```

Then restart MAMP server

**The end**
