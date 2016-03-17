# kirby-multisite

Multisite tutorial

## Setup hostnames

Open hostname

```shell
$ open -a Atom /etc/hosts
```

Setup hostnames

```
# serve 127.0.0.1, when XYZ.com:8888 is called

127.0.0.1 ABC.com
127.0.0.1 XYZ.com
```

***

## Setup vistual hosts

Open vistual hosts

```shell
$ open -a Atom /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```

Virtual hosts setup

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
