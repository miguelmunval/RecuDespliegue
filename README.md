# RecuDespliegue
- Para realizar este trabajo primero he creado un archivo yaml que se ocupa de crear todo y un script deploy que ejecuta dicho yaml.
- Una vez hecho esto se crean las instancias y todo lo necesario y procedo a crear la aplicación php.
- La aplicación es un código de ejemplo de PDO visto en la asignadura de desarrollo en entorno servidor y al no ser más que un ejemplo para probar no es muy óptimo
- Ya con la aplicación creada me conecto a la instancia y ejecuto los siguentes comandos:
1. cd /var/www/http
2. sudo rm index.html
- Esto lo hacemos para borrar el archivo .html que viene por defecto y que aparecería en la página y ahora procedemos a meter nuestro código:
1. sudo nano index.php
- Y metemos el código de la app simplemente copiando y pegando.
- Hacemos también un restart de apache para que lea los cambios:
1. sudo systemctl restart apache2
