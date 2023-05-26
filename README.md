# AUTORES

__Joel, Ángel, Giancarlo__ - Estudiantes del ciclo formativo de grado superior DAW 2022/2023

![Autores](https://www.itcmadi.com/devmatch1/blog/wp-content/uploads/2023/05/rr-removebg-preview.png)

![LinkiaFP](https://qualitasequity.com/images/clientes_impact/linkia_logo.png)

# DESCRIPCIÓN

__DevMatch__ es una plataforma orientada a perfiles IT, cuyo objetivo es reunir talento en un determinado proyecto. Podrás desarrollar proyectos con personas especializadas en una rama concreta (Front-End, Back-End, SEO, Análisis de datos, Big Query...)

:warning: Esta herramienta ha sido __diseñada y desarrollada como proyecto final del grado superior (TFG) de DAW__ :warning: .

# ¿CÓMO INSTALAR EL PROYECTO?

1. Abrir XAMPP o WAMPP y activa Apache y MySQL
2. Descargar el proyecto y lo metemos dentro de una carpeta en htocs
3. Abrir la carpeta del proyecto desde el IDE (en nuestro caso VSCode) y configurar el fichero /backend/config.php con los datos de la BD y su usuario correctos.
4. En fichero config.php - Cambiar usuario a root y password en blanco. El puerto del servidor puede cambiar, hay que revisar XAMPP o WAMPP
```
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "devMatch";
```
5. El nombre del servername es localhost y el nombre de la bd es devMatch
6. Abrimos una terminal en nuestro id y ejecutamos npm i para instalar todos los modulos correspodientes

```
.npm i
```

# OBJETIVO DEL DESARROLLO

El propósito de esta plataforma es conectar a profesionales con habilidades y conocimientos diversos, con proyectos que requieran su participación. Los usuarios tendrán la posibilidad de publicar sus ideas de proyecto y esperar la postulación de profesionales relevantes. 

Asimismo, podrán buscar proyectos en los que deseen participar y postularse.

Para garantizar la privacidad y seguridad de los usuarios, se implementará un sistema de registro y login que solo permitirá el acceso a usuarios registrados. Asimismo, podrán mantener un perfil con información detallada acerca de sus habilidades y experiencia, para que los proyectos puedan encontrar a los profesionales adecuados.

Con este proyecto nos gustaría fomentar la colaboración y el intercambio de conocimientos entre los profesionales del sector IT.

