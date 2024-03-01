# Ejercicio 5 - imagen con Dockerfile - Aplicación web

- Arranca un contenedor que ejecute una instancia de la imagen `php:7.4-apache` , que se llame web y que sea accesible desde un navegador en el puerto 8000.

  ```bash
  docker run -d -p 8000:80 --name web php:7.4-apache
  ```

  ![image-20240228123001163](./Ejercicio%205.assets/image-20240228123001163.png)

- Coloca en el directorio raíz del servicio web ( `/var/www/html` ) un sitio web donde figure el nombre de los componentes del grupo - el sitio deberá tener al menos un archivo `index.html` y un archivo `.css`.

  ```bash
  docker cp Escritorio/index.html web:/var/www/html
  docker cp Escritorio/style.css web:/var/www/html
  docker exec -it web bash
  ```

  ![image-20240228125319330](./Ejercicio%205.assets/image-20240228125319330.png)

  ![image-20240228125337945](./Ejercicio%205.assets/image-20240228125337945.png)

- Coloca en ese mismo directorio raíz un archivo llamado `mes.php` que muestre el nombre del mes actual. Ver la salida del script en el navegador.

  ```bash
  docker cp Escritorio/mes.php web:/var/www/html
  docker exec -it web bash
  ```

  ![image-20240228130031163](./Ejercicio%205.assets/image-20240228130031163.png)

  ![image-20240228130058515](./Ejercicio%205.assets/image-20240228130058515.png)

- Borrar el contenedor.

  ```bash
  docker rm -f web
  ```

  ![image-20240228130244764](./Ejercicio%205.assets/image-20240228130244764.png)

- Automatizar estas operaciones creando un fichero Dockerfile.

  ![image-20240228131246019](./Ejercicio%205.assets/image-20240228131246019.png)

- Subir la imagen a la cuenta de Docker Hub.

  ```bash
  docker tag ejercicio5 noealvarez/ejercicio5
  docker push noealvarez/ejercicio5
  ```

  ![image-20240228134532497](./Ejercicio%205.assets/image-20240228134532497.png)

1. Creación inicial del contenedor - documenta los pasos hasta el borrado del mismo.

2. Bloque de código con el Dockerfile.

   ![image-20240228131246019](./Ejercicio%205.assets/image-20240228131246019.png)

3. Captura de pantalla y documento donde se vea el comando que crea la nueva imagen.

   ![image-20240228132829695](./Ejercicio%205.assets/image-20240228132829695.png)

   ![image-20240228133137417](./Ejercicio%205.assets/image-20240228133137417.png)

4. Captura de pantalla y documento donde se vea la imagen subida a tu cuenta de Docker Hub.

   ![image-20240228134855302](./Ejercicio%205.assets/image-20240228134855302.png)

   ![image-20240228134920491](./Ejercicio%205.assets/image-20240228134920491.png)

5. Captura de pantalla y documento donde se vea la bajada de la imagen - **por parte de otra persona del grupo** - y la creación de un contenedor

   ![image-20240301091005294](./Ejercicio%205.assets/image-20240301091005294.png)

   **Cree yo otro usuario diferente desde el que descargue la imagen y cree el contenedor**.**Se puede apreciar que el mes que sale es diferente ya que lo hice en diferentes días.**

   ![image-20240301091238750](./Ejercicio%205.assets/image-20240301091238750.png)

6. Captura de pantalla y documento donde se ve el acceso al navegador con el sitio servido.

   ![image-20240228132858000](./Ejercicio%205.assets/image-20240228132858000.png)

![image-20240228132912547](./Ejercicio%205.assets/image-20240228132912547.png)