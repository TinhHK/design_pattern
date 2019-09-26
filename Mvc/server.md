server {

       server_name mvc.design.local;
	
       root /home/mrktinh/Projects/Design_pattern/Mvc;

       # Add index.php to the list if you are using PHP
       index index.php index.html index.htm index.nginx-debian.html;
       location / {
                # First attempt to serve request as file, then
                # as directory, then fall back to displaying a 404.
                try_files $uri $uri/ /index.php?$query_string;
        }
        

	location ~ \.php$ {
           include snippets/fastcgi-php.conf;
           fastcgi_pass unix:/run/php/php7.2-fpm.sock;
        }


       location ~ /\.ht {
          deny all;
       }
}

