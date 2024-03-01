# Ejercicio 4 - Docker Compose

- Captura de pantalla y documento donde se vea el fichero docker-compose.yaml .

  ![image-20240226092947151](./Ejercicio%204.assets/image-20240226092947151.png)

- Captura de pantalla y documento donde se vea la aplicación funcionando. Se valorará conseguir el efecto Greenrain .

  ```bash
  docker run --rm -it defnotgustavom/cmatrix cmatrix -C green 
  ```

  ![image-20240226093037853](./Ejercicio%204.assets/image-20240226093037853.png)

- Explicar brevemente cómo funciona esta aplicación.

  La aplicación tiene la simple función de dar el efecto que se aprecia en la imágen de arriba, que es el de hacer caer letras de color verde por defecto o de otro color si le añades -C y el color a la hora de ejecutar el contenedor con la aplicación.

  El efecto de "greenrain" es el que viene por defecto y con algunos opciones extras seguramente se puede añadir algún otro efecto.