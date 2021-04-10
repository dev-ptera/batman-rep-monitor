## Batman Representative

This repo has the custom node monitor styles for the [banano batman representative](http://108.39.249.5/).

**Note to self for future migrations**

This node monitor is set up using the *manual* Nano Node Monitor integration guide, found [here](
https://github.com/NanoTools/nanoNodeMonitor)s.

## Setup Nginx

Setup nginx following this [tutorial](
https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04).  

Not all the steps are required, so I've compressed the required steps into the commands below.

```ts
sudo apt-get update
sudo apt-get install nginx
sudo apt-get install php-fpm php-mysql
sudo apt-get install php-curl
sudo ufw allow 'Nginx HTTP'
```

## Replace Default Nginx Settings

Replace the default `sites-available` file with the file found in this repo, and add your public IP where specified. 

```
cd etc/nginx/sites-available
sudo chmod -R 777 *
[Update IP in etc/nginx/sites-available]
sudo systemctl reload nginx
```

## Setup Default Node Monitor Tool

Once Nginx is installed and serving a temporary web site, we can add the nano node monitor tool.

```
cd /var/www  
sudo chmod +rwx html
cd html
sudo rm index.nginx-debian.html 
sudo git clone https://github.com/NanoTools/nanoNodeMonitor .
cd .. 
sudo chmod -R 777 *
```

In summary these commands:

1. Go to where the static html site is served.
2. Add edit permission to the folder
3. Remove the default static site
4. Git clone the nano monitor repo
5. Up one level
6. Make all these files editable


## Add Batman theme customization

Replace the content found within the default nano monitor tool with the content found in this repo.

Add customizations as needed. 

```
cp var/www/html/modules/config.php /var/www/html/modules
cp -r var/www/html/static/gothem/ /var/www/html/static/themes
cp -r var/www/html/static/img/ /var/www/html/static
cp var/www/html/index.php /var/www/html
```

