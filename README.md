Ejericicio de prueba para vacante dev frontend mediante la carga y consumo de apis para el tema de películas recientes.

Se generan dos pantallas, una donde salen todas las peliculas, una para la pantalla del usuario regristrado donde pueda añadir/editar peliculas. *

Usuario adrauz@gmail.com pss:123456789 

Para el consumo del api de The Movie DB se genera un api_key el cual se ubica en el archivo .env del proyecto. Esto se hizo para que al ingresar con el usuario te diriga al sitio "home" donde se vean las ultimas películas acorde al sitio the movie DB.

En esta pantalla se añade el botón + Añadir Película donde muestra el formulario correspondiente mas el tema de captcha v2.
<img width="880" alt="image" src="https://user-images.githubusercontent.com/121464138/225973315-31864ab3-cb95-434d-bdc1-e45bb537e1ba.png">

Lamentablemente no logré hacer bien el routing para dicha accion teniendo el formulario hecho el cual se ingresa a la ruta /home/create/

<img width="423" alt="image" src="https://user-images.githubusercontent.com/121464138/225973445-676c7344-b1e4-4e45-a3bc-f53b0a486a04.png">

Para el control de las peticiones se hace mediante el controlador taskcontroller y probando el api tasks se realizaron pruebas del API teniendo como inconveniente que no logré "cachar" los valores del json y por ende si genera el insert en la tabla peliculas pero dichos valores van nulos.

El API a consumir se llama tasks (ejemplo (http://127.0.0.1:9001/api/tasks))

<img width="438" alt="image" src="https://user-images.githubusercontent.com/121464138/225977414-18e62efb-b8cc-4342-a147-812f4aaa88e3.png">


Realmente fue una prueba interesante ya que en mi experiencia no usamos PHP de manera pura sino a través del framework de SugarCRM el cual ya nos daba algunas herramientas como el lograr obtener el "bean" de todo el objeto a insertar en la tabla y aqui me ha costado algo de trabajo ya que la documentacion no fue muy explicita aparte de algunos videos que encontré trabajaron con versiones inferiores de Laravel.


En este caso usamos Laravel v8.83.27 y fue un tema tener independencias así como algunas librerias actualizadas.

Para su instalación se recomienda seguir los siguientes pasos:

1.-Clonar este repositorio y entrar dentro de la ruta del mismo (cd..)

2.-Ajecutar composer install

3.-En su herramienta de base de datos crear tabla movies e importar la estructura y la data del siguiente archivo:

[DB_movies.zip](https://github.com/Urameshi07/Movies_ejercicio/files/11004083/DB_movies.zip)

4.- Ejecutar php artisan migrate:refresh --seed

5.- Iniciar su servidor web (Xammp o MAMP) e ingresar a su localhost

* En caso de requerir key, en la línea de comandos ingresar: php artisan key:generate



