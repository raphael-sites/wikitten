# wikitten

## Easy installation for appache + php7

1. Get ready
```
apt install apache2 php7.0 libapache2-mod-php7
a2enmod rewrite
apache2ctl restart
```

Change Directory Permission in `/etc/apache2/apache2.conf`
```
<Directory /var/www>
        Options FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
```


2. Clone wikitten to `/var/www/html`

3. Clone wiki to `/var/www/wiki`

4. Run `watch git pull` in tmux

Done
