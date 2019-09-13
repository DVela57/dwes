# Entorno de Desarrollo 
- Entorno Docker para el módulo de Desarrollo Web en Entorno Servidor
- Iniciar servicio:
    docker-compose up -d
- Para servicio
    docker-compose down


- Debe editar su fichero `/etc/hosts` para acceder a los dos sitios web creados por el mismo.

```
127.0.0.1	web1.com
127.0.0.1	web2.com 
127.0.0.1	phpmyadmin.docker
```

- Este entorno incorpora un script para inicializar una base de datos en `./data/init-db`

    - Una vez iniciado el servicio conectese a `phpmyadmin.docker` e importe el script citado.

- Este entorno creo los siguientes contendedores en su rama master:
    - proxy: Es un proxy nginx para poder mantener simultaneamente múltiples contenedores con diferentes sitios web.
    - db: Contenedor mysql para uso de bases de datos.
    - phpmyadmin: Contenedor para administración web del anterior.
    - web1 y web2: sitios web1.com y web2.com con soporte php corriendo en apache.

- Pruebe en su navegador las siguientes url's:

    - http://web1.com/ 
    - http://web1.com/factorial.php?numero=3
    - http://web1.com/factorial.php?numero=10
    - http://web2.com/
