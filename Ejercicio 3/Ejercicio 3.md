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

   ![image-20240223093006587](./Ejercicio%203.assets/image-20240223093006587.png)

**Servidor:** db

**Usuario:** root

**Contraseña:**1234

**Base de datos:**

- Captura de pantalla y documento donde se vean los contenedores creados y en ejecución

  ![image-20240223093150272](./Ejercicio%203.assets/image-20240223093150272.png)

- Captura de pantalla y documento donde se vea el acceso a la BD a través de la interfaz web de Adminer

  ![image-20240223101116211](./Ejercicio%203.assets/image-20240223101116211.png)

- Captura de pantalla y documento donde se vea la creación de una BD con la interfaz web Adminer

  ![image-20240223101155764](./Ejercicio%203.assets/image-20240223101155764.png)

- Captura de pantalla y documento donde se entre a la consola del servidor web en modo texto y se compruebe que se ha creado la BD

  ![image-20240223101335518](./Ejercicio%203.assets/image-20240223101335518.png)

- Borrar los contenedores la red y los volúmenes utilizados

  ![image-20240223101451714](./Ejercicio%203.assets/image-20240223101451714.png)

