<?php
    // Clase del 19-03-2026

    // ¿Que son las validaciones y para que nos sirven?
        // Las validaciones son procesos que utilizamos para verificar y asegurarnos que los datos enviados por el ususario cumplan ciertos criterios o reglas, todo esto anty6es de quew OHO los precese o los almacene en una base de datos.
        
        // Tipos de validaciones 
           // Validacion de campos obligatorios: Verificamos que los campos que son necesarios para el procesamiento de los datos no esten vacios. Nota, esto tambien puede ser valido desde el front end usando JS. 
           // Validacion de formato: Verificamos quelos datos sigan un formato especifico, por ejemplo, que un correo electronico tenga el formato correcto. O que la fecha enviada, tenga el formato esperado.
           // Validación de tipo de dato: Aseguramos que los datos ingresados sean del tipo que esperamos, por ejemplo, que un campo de edad contenga solo números. 
           // Validacion de longitud: Aseguramos que los datos NO excedan una longitud maxima o minima, por ejemplo, que una contraseñatenga al menos 8 caracteres.
           // Validacion de rango: Verificar que los datos númericos estén en un rango especifico, por ejemplo, que la edad este entre 18 y 19 años.

           // ¿Cómo se realiza las validaciones en PHP?
               // isset(): Se utiliza para verificar si una variable esta definida y no es nula. Es comunmente utilizada para validar datos enviados por formularios.
               // empty(): Se utiliza para verificar si una varable ezta vacia. Considera vacia a una variable que no esta definida, que es nula, que es una cadena vacia, que es un array vacio o que el número es 0.
               // is_numeric(): Se utiliza para verificar si una variable es un número o una cadena numérica. Es útil para validar campos que si o si deben contener valores númericos.
               // filter_ver(): 

           // ¿Que es la sanitización de datos y por qué es importante?
              // Su utiliza para limpiar y proteger que nuestro sistema no sea vulnerable a ataques como inyecciones de codigo. La santizacion implica eliminar o modificar caracteres especiales que podrian ser utilizados para ejecutar código malicioso. Por ejemplo, si un usuario ingresa un script en un campo de texto, la santización puede eliminar etiquetas HTML para evitar que el script se ejecute.  

        // Metodos PHP para sanitización de datos
            // strip_tags(): Elimina todas las estiquetas HTML y PHP de una cadena, lo que tambien ayuda a a prevenir ataques de inyeccion de codigo.
            // htmlspecialchars(): Convierte caracteres especiales en entidades HTML, lo que ayuda a prevenir ataques de inyecciones de código. Por ejemplo, convierte "<" en &lt; y ">" en &gt;
            // filter_var(): Ademas de validar, tambien puede ser usado para sanitizar datos. Por ejemplo, filter_var($email , FILTER_SANITIZE_EMAIL), eliminará caracteres no validos de una direccion de correo electronico.