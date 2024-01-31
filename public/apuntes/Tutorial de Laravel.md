# Tutorial de Laravel

## Instalación:

1. Iniciamos XAMPP.

2. Es necesario tener instalado el Composer. Se puede bajar desde https://getcomposer.org/doc/00-intro.md#installation-windows
2. Para comprobar que se ha instalado bien, pondremos el siguiente comando en la consola:

        composer -V

    Nos dirá el número de versión, y en caso contrario habría que comprobar el motivo por el que no está instalado globalmente.

3. La guía de instalación de Laravel está en: https://laravel.com/docs/10.x/installation
    
    Los pasos que nos interesan son:

    * Añadir el comando 'laravel' a nuestro composer, para poder utilizarlo de forma global en nuestro ordenador:

            composer global require laravel/installer:^5.4

    * Comprobamos que funciona escribiendo:

            laravel -V

## Creación de proyectos:

Abrimos una terminal y escribimos el comando:

        laravel new nombreProyecto

Se nos creará una carpeta con todo el framework, preparado para funcionar. Para comprobar que está corrrecto, nos vamos al navegador y abrimos la dirección de localhost correspondiente.


## Estructura del framework:

* Se basa en la arquitectura MVC, y los directorios correspondientes están en la siguientes rutas:

    * CONTROLADORES: Se encuentran en:
        app/Http/Controllers

    * VISTAS: Están en:
        resources/views

    * MODELOS: Se guardan en:
        app/models


## CONTROLADORES:
### Creación de controladores:

Escribir en la consola:

    php artisan make:controller PruebaController

(o copiar el código de uno que tengamos y crear otro nuevo con ese contenido y cambiando el nombre).

### Funciones en controladores:

Las funciones que creamos en un controlador se encargan de redirigir a la vista que queramos.

Ejemplo:

        public function ofertas() 
        {
            return view('vistaOfertas');
        }

### Envío de parámetros a una vista:

Si queremos enviar un parámetro, como por ejemplo, un número o un texto, se haría añadiéndolo a un array, que puede ser declarado con un nombre, de este modo:

        public function ofertas() 
        {    
            $datos['totalOfertas'] = 20;
            return view('vistaOferta', $datos);
        }

También se puede hacer así:

        public function ofertas() 
        {    
            return view('vistaOferta', ['totalOfertas' => 20]);
        }

### Recibir parámetros desde las vistas:
* Parámetros GET:

    Por ejemplo, un usuario escribe en la barra de direcciones:
    
    https://miPaginaWeb.com/verOfertas/febrero/sudaderas


        public function verOfertas($mes, $tipoProducto)
        {
            // La variable 'mes' valdría 'febrero' y 
            // la variable 'tipoProducto' valdría 'sudaderas'
        }

* Parámetros POST:

    Si nos envían un formulario, habría que utilizar la clase Request en el encabezado de la función.
    Esta clase se instancia automáticamente cuando aparece en la función, antes de recibir los parámetros,
    y después de crearse, obtiene automáticamente todos los parámetros recibidos y son accesibles desde la variable $request.
    
    Por ejemplo:

            public function altaUsuario(Request $request)
            {
                $nombreRecibido = $request->nombre;
                $contraseñaRecibida = $request->contraseña;
                $paisRecibido = $request->pais;
            }


    




