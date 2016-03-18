# kirby-multisite

Multisite tutorial

## Setup hostnames

Open hostname

```shell
$ open -a Atom /etc/hosts
```
or
```
$ open -a Atom /private/etc/hosts
```

Setup hostnames

```
# serve 127.0.0.1, when XYZ.com:8888 is called

127.0.0.1 ABC.com
127.0.0.1 XYZ.com
```

***

## Setup vhosts

Open vhosts conf

```shell
$ open -a Atom /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```
or
```
$ open -a Atom /private/etc/apache2/extra/httpd-vhosts.conf
```

Setup vhosts conf

```
<VirtualHost *:80>
  DocumentRoot "/Applications/Mamp/htdocs/multisite" ## content to be served
  ServerName apples.com
  ServerAlias www.apples.com
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "/Applications/Mamp/htdocs/multisite" ## content to be served
  ServerName oranges.com
  ServerAlias www.oranges.com
</VirtualHost>
```

## Enable vhosts

Open httpd.conf

```
$ open -a Atom /Applications/MAMP/conf/apache/httpd.conf
```
or
```
$ open -a Atom /etc/apache2/httpd.conf
```

Add (or uncomment)

```
# Virtual hosts
Include /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```

or

```
Include /private/etc/apache2/extra/httpd-vhosts.conf
```

Restart apache

```
$ sudo apachectl restart
```
