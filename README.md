# CRUD de Clientes WebApp

## Descripción

Esta aplicación web permite gestionar una lista de clientes mediante operaciones CRUD (Crear, Leer, Actualizar y Eliminar). Incluye una interfaz interactiva y funcional que utiliza Bootstrap para el diseño responsivo, validaciones avanzadas para entradas de datos, integración de APIs externas y generación dinámica de PDFs con detalles del cliente. Los datos se obtienen de una base de datos generada con Mockaroo.

La aplicación está diseñada para ser intuitiva y funcional, con un enfoque en la experiencia del usuario y el uso de tecnologías modernas.

---

## Funcionalidades

✔️ **Mostrar detalles con navegación:**  
En las pantallas de detalles y modificar, se incluyen botones para navegar entre el cliente siguiente y el anterior sin necesidad de volver a la lista principal.

✔️ **Validación avanzada en Nuevo y Modificar:**  
- Verificación de que el correo electrónico sea válido y no esté repetido.  
- Validación de direcciones IP correctas.  
- Comprobación del formato correcto del teléfono (999-999-9999).

✔️ **Gestión de imágenes:**  
- Mostrar una imagen asociada al cliente almacenada en la carpeta `uploads`.  
- Si no existe la imagen, se carga una por defecto.  
- Permite subir o cambiar la imagen del cliente desde las pantallas de Nuevo y Modificar.  
- Se controla que las imágenes subidas sean de formato JPG o PNG y de un tamaño inferior a 500 KB.

✔️ **Geolocalización y banderas:**  
- En la pantalla de detalles, se muestra una bandera del país asociado a la IP del cliente utilizando [ip-api.com](https://ip-api.com) y [Flagpedia](https://flagpedia.net).  
- La ubicación del cliente también se representa en un mapa interactivo utilizando la API de [OpenLayers](https://openlayers.org).

✔️ **Ordenación de clientes:**  
- La lista de clientes puede ordenarse por nombre, apellido, correo electrónico, género o dirección IP.  
- Permite navegar por la lista con paginación y botones de navegación (Primero, Anterior, Siguiente, Último).

✔️ **Generación de PDF:**  
- Genera un archivo PDF con todos los detalles de un cliente mediante [HTML2PDF Rocket](https://www.html2pdfrocket.com).  
- Incluye un botón "Imprimir" para descargar o visualizar el PDF directamente desde la interfaz.

---

## Live Demo

Puedes ver una demostración en vivo de esta aplicación en el siguiente enlace:  
[**Live Demo - CRUD de Clientes WebApp**](http://www.mycrud-php.free.nf)

Esta aplicación está desplegada en un servidor público para pruebas y demostraciones.

---

## Tecnologías utilizadas

- **HTML5:** Estructura principal de la aplicación.
- **CSS3:** Estilización personalizada con Bootstrap.
- **JavaScript:** Lógica interactiva y funcionalidad avanzada.
- **PHP (con PDO):** Manejo de las operaciones CRUD y conexión con la base de datos.
- **Bootstrap 5:** Diseño responsivo y componentes prediseñados.
- **MySQL:** Almacenamiento de datos de los clientes.
- **APIs externas:**  
  - [ip-api.com](https://ip-api.com) para obtener la información geográfica a partir de la IP.  
  - [Flagpedia](https://flagpedia.net) para mostrar banderas de países.    
  - [This Person Does Not Exist](https://thispersondoesnotexist.com) para generar imágenes realistas en caso de que no haya una asociada.  
  - [HTML2PDF Rocket](https://www.html2pdfrocket.com) para la generación dinámica de PDFs.

---

## Créditos

Desarrollado por **Diego Sesmero Fernández**.  
Los datos de la base de datos han sido generados utilizando [Mockaroo](https://mockaroo.com).  

