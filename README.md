MVC Framework.
Show hidden files to see the .htaccess.

.htaccess should contain the lines:
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]

If page returns Error 500, go to the httpd.conf and add the line
LoadModule rewrite_module modules/mod_rewrite.so
or
LoadModule rewrite_module /usr/lib/apache2/modules/mod_rewrite.so
Often this is /etc/apache2/httpd.conf

Paths look like this
http://localhost/git/mvc/controllername/methodname/argumentname

touch README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:guitarbeerchocolate/mvc.git
git push -u origin master
Push an existing repository from the command line

git remote add origin git@github.com:guitarbeerchocolate/mvc.git
git push -u origin master