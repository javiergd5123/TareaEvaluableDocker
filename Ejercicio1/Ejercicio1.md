# Ejercicio 1 - Servidor de base de datos

> Javier González Díaz

1.- Arrancar un contenedor que se llame bbdd y que ejecute una instancia de la imagen mariadb para que sea accesible desde el puerto 3306.
Antes de arrancarlo visitar la página del contenedor en Docker Hub y establecer las variables de entorno necesarias para que:

- La contraseña de root sea root .
-  Crear una base de datos automáticamente al arrancar que se llame prueba .
- Crear el usuario invitado con la contraseña invitado .



```bash
$ docker run -d --name bbdd -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=prueba -e MYSQL_USER=invitado -e MYSQL_PASSWORD=invitado mariadb
```

![Captura desde 2024-02-20 09-05-24](./Ejercicio1.assets/Captura desde 2024-02-20 09-05-24.png)
