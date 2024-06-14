<?php
//1.- Guardar la información obtenida con el formulario
$nombre = $_POST["nombre"]; //Crear un contenedor con la etiqueta 'nombre'. Dentro de ese contenedor, guardar la información que llegó mediante el Método POST y se obtuvo en el elemento de formulario con el atributo name="nombre"
$email = $_POST["email"]; //Crear un contenedor con la etiqueta 'email'. Dentro de ese contenedor, guardar la información que llegó mediante el Método POST y se obtuvo en el elemento de formulario con el atributo name="email"
$servicio = $_POST["servicio"]; //Crear un contenedor con con la etiqueta 'servicio'. Dentro de ese contenedor, guardar la información que llegó mediante el Método POST y se obtuvo en el elemento de formulario con el atributo name="servicio"
$comentario = $_POST["comentario"]; //Crear un contenedor con la etiqueta 'comentario'. Dentro de ese contenedor, guardar la información que llegó mediante el Método POST y se obtuvo en el elemento de formulario con el atributo name="comentario"



//2.- Crear el mail
$to = "anahi.foresi@educacionit.com";
$email_subject = "Nuevo mensaje de la web";
$email_body = "Haz recibido un nuevo mensaje
            \n Nombre: $nombre
            \n Correo: $email
            \n Consulta por el servicio: $servicio
            \n Mensaje o consulta: $comentario"
$headers = "From: $email"; //Crear un contenedor con la etiqueta 'headers'. Dentro de ese contenedor, guardar la información que se encuentra en el contenedor con la etiqueta 'email'. Agregar el texto From:

//3.- Enviar el mail
mail($to, $email_subject, $email_body, $headers);
/*
    Función mail (propia de PHP)
        => Para hacer su trabajo necesita:
         => ¿Quién recibe el mail? - variable $to
         => ¿Cuál es el asunto del mail? - variable $email_subject
         => ¿Cuál es el texto del mail? - variable $email_body
         => ¿Quién envía el mail? - Esta información se pasa mediante headers. Variable $headers
*/
?>
<a href="index.html">Volver</a>