# **Plugin para WordPress para renderizar formulario mediante un Iframe**

## **Instalación**

### **Local**

### **Producción**

#### **Opción 1 via FTP**

Copiar la carpeta *aiframe-forms* y subir al entorno de producción en *wp-content/plugins*

#### **Opción 2 via Administrador WordPress**

Comprimir la carpeta *aiframe-forms* en formato zip e instalar el plugin con el administrador de WordPress

<hr>

## **Uso**

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
