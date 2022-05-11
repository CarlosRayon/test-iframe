# Plugin para WordPress para renderizar formulario mediante un Iframe

El repositorio del plugin esta pensado para trabajar sobre el plugin pudiendo probar en vivo su funcionamiento en el entorno local.

Se puede instalar en un WordPress en local siguiendo los pasos de *Instalación > Local*. Gracias al .gitignore solo se reposita el código
relacionado con el plugin.

## Instalación

### Local

- Creamos un directorio vació para el proyecto y clonamos el repositorio en el.
- Descargamos WordPress desde su [pagina oficial](https://es.wordpress.org/download/)
- Descomprimimos el zip descargado y pegamos todo el contenido de la carpeta WordPress en nuestro entorno de trabajo.
 **TODO MENOS LA CARPETA *wp-content*. DE ESTA CARPETA COPIAMOS TODO MENOS LA CARPETA *plugins***
- Hacemos una instalación básica del WordPress (en la sección Recursos de este documento tenemos un ejemplo básico)
- En la sección de plugins tenemos nuestro plugin disponible para activar

### Producción

#### Opción 1 via FTP

- Copiar la carpeta *aiframe-forms* y subir al entorno de producción en *wp-content/plugins*

#### Opción 2 via Administrador WordPress

- Comprimir la carpeta *aiframe-forms* en formato zip e instalar el plugin con el administrador de WordPress

<hr><br>

## Uso

Con el plugin instalado le debemos activar desde el administrador de plugins del propio WordPress

El plugins una vez activo permite crear un **shortcode** para incluir en la paginas y post.

El formato del shortcode es el siguiente:

```html
[aiforms ( uuid="<uuid-form-code>" ) ( type="<create> | <edit>" )]

<!-- Ejemplo -->
[aiforms uuid="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxxx" type="create"]
```

Con estos datos el plugin hacer una llamada al gestor de formularios para generar el formulario correspondiente en la ubicación desde
donde tengamos ubicado el shortcode

<hr><br>

## Recursos

### Instalación genérica de WordPress

- Create hosts in /etc/hosts

 ```bash

# example

127.0.0.1 wordpress-test.local
```

- Create ssl in */etc/ssl/certs*

- Donwload [wordpress](https://es.wordpress.org/download/)

- Extract file and put in local server: */var/www/html/[wordpress-test-directory]*

- Create database for wordpress

- Create apache config port 80.

```apache
# /etc/apache2/site-avalible/<wordpress-test.conf>

<VirtualHost *:80>
    DocumentRoot /var/www/html/wordpress-test.local
    ServerName wordpress-test.local

    ErrorLog ${APACHE_LOG_DIR}/wordpress-test.local-error.log
    CustomLog ${APACHE_LOG_DIR}/wordpress-test.local-access.log combined

</VirtualHost>

```

- Create apache config port 443.

```apache
# /etc/apache2/site-avalible/<wordpress-test-ssl.conf>

<VirtualHost *:443>

    DocumentRoot /var/www/html/wordpress-test.local
    ServerName wordpress-test.local

    ErrorLog ${APACHE_LOG_DIR}/wordpress-test.local-error.log
    CustomLog ${APACHE_LOG_DIR}/wordpress-test.local-access.log combined

    SSLEngine on
    SSLCertificateKeyFile /etc/ssl/certs-local/wordpress-test.local-key.pem
    SSLCertificateFile /etc/ssl/certs-local/wordpress-test.local.pem

    ErrorLog ${APACHE_LOG_DIR}/wordpress-test.local-error.log
    CustomLog ${APACHE_LOG_DIR}/wordpress-test.local-access.log combined

</VirtualHost>
```

- Go to browser and intro url hosts defined in */etc/hosts*. Example: wordpress-test.local

- Follow the instructions
