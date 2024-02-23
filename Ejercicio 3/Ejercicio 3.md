# Ejercicio 3 - contenedor en red:Adminer y MariaDB

1. Crea una red bridge `redbd.`

   ```bash
   docker network create --driver bridge redbd
   ```

   ![image-20240223091010031](./Ejercicio%203.assets/image-20240223091010031.png)

2. Crea un contenedor con una imagen de `mariaDB` que estará en la red `redbd` . Este contenedor se
   ejecutará en segundo plano, y será accesible a través del puerto 3306. (Es necesario definir la
   contraseña del usuario `root` y un volumen de datos persistente).

   ```bash
   docker run -d --name mariadb-container --network redbd -p 3309:3306 -e MYSQL_ROOT_PASSWORD=1234 -v mariadb_data:/var/lib/mysql mariadb
   ```

   ![image-20240223091854854](./Ejercicio%203.assets/image-20240223091854854.png)

3. Crear un contenedor con `Adminer` que se pueda conectar al contenedor de la BD

   ```bash
   docker run -d --name adminer-container --network redbd -p 8080:8080 adminer
   ```

   ![image-20240223092234783](./Ejercicio%203.assets/image-20240223092234783.png)

4. Comprobar que el contenedor **Adminer** puede conectar con el contenedor **mysql** abriendo un navegador web y accediendo a la URL: http://localhost:8080

   

