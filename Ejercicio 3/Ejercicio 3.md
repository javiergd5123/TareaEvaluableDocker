# Ejercicio 3 - contenedor en red:Adminer y MariaDB

1. Crea una red bridge `redbd.`
2. Crea un contenedor con una imagen de `mariaDB` que estará en la red `redbd` . Este contenedor se
   ejecutará en segundo plano, y será accesible a través del puerto 3306. (Es necesario definir la
   contraseña del usuario `root` y un volumen de datos persistente)

3. Crear un contenedor con `Adminer` que se pueda conectar al contenedor de la BD

4. Comprobar que el contenedor **Adminer** puede conectar con el contenedor **mysql** abriendo un navegador web y accediendo a la URL: http://localhost:8080