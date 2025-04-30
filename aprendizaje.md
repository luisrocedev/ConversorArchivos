# Aprendizaje del Proyecto: Conversor de Archivos

## Programación

### 1. ¿Qué elementos fundamentales incluye vuestro código?

En nuestro código usamos variables (para guardar datos que cambian), operadores (para hacer operaciones como sumar o comparar), y tipos de datos como textos (strings), números y listas (arrays). Por ejemplo:

```php
$nombre = "Juan"; // variable tipo texto
$edad = 20; // variable tipo número
$lista = [1,2,3]; // variable tipo lista
if ($edad > 18) { ... } // operador de comparación
```

### 2. ¿Qué estructuras de control habéis usado y por qué?

Utilizamos estructuras como `if` (para tomar decisiones), `foreach` (para repetir acciones con listas) y `exit` (para salir del programa si hay un error). Ejemplo:

```php
if ($formato === "json") {
    // Si el formato es JSON, hacemos algo
}
foreach ($filas as $fila) {
    // Repetimos para cada fila
}
```

### 3. ¿Habéis implementado control de excepciones? ¿Cómo gestionáis errores?

No usamos try-catch, pero sí comprobamos si los datos están bien antes de seguir. Si falta algo, mostramos un mensaje de error y paramos el programa:

```php
if (!isset($input['contenido'])) {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}
```

### 4. ¿Habéis documentado el código mediante comentarios?

Sí, ponemos comentarios para explicar partes importantes del código. Ejemplo:

```php
// Carga la librería para crear PDF
require __DIR__ . '/vendor/autoload.php';
```

### 5. ¿Qué paradigma habéis aplicado? ¿Por qué?

Usamos programación estructurada (funciones y procedimientos) porque es más fácil para proyectos pequeños. Solo usamos programación orientada a objetos para la librería de PDF.

### 6. ¿Qué clases y objetos principales forman vuestro proyecto?

No creamos nuestras propias clases, pero usamos la clase `Mpdf` de una librería externa para crear archivos PDF:

```php
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output($archivoFinal, \Mpdf\Output\Destination::FILE);
```

### 7. ¿Habéis usado herencia, polimorfismo o interfaces?

No, porque nuestro proyecto es sencillo y no lo necesita.

### 8. ¿Habéis gestionado la información mediante archivos? ¿Usáis ficheros o interfaces gráficas?

Sí, guardamos datos en archivos de texto y PDF. Además, la web tiene una interfaz gráfica hecha con HTML y JavaScript para que el usuario interactúe fácilmente.

### 9. ¿Qué estructuras de datos estáis utilizando?

Usamos listas (arrays) para guardar y procesar datos, por ejemplo, al convertir CSV a JSON:

```php
$filas = array_map("str_getcsv", explode("\n", trim($contenido)));
```

### 10. ¿Habéis aplicado técnicas avanzadas como expresiones regulares o flujos de entrada/salida?

No usamos expresiones regulares, pero sí leemos y escribimos archivos (entrada/salida).

---

## Sistemas Informáticos

### 1. ¿Qué características tiene el hardware donde se ejecuta vuestro desarrollo?

Trabajamos en ordenadores normales (como un Mac) para programar y probamos en un servidor web sencillo para producción.

### 2. ¿Qué sistema operativo habéis seleccionado y por qué?

Usamos macOS para programar porque es el que tenemos, y Linux en el servidor porque es muy común y estable para webs.

### 3. ¿Cómo habéis configurado las redes para vuestro proyecto?

Usamos HTTP/HTTPS para que la web funcione en local y en internet. No hemos puesto seguridad avanzada porque es un proyecto sencillo.

### 4. ¿Habéis implementado sistemas de copias de seguridad?

No hay copias automáticas, pero los archivos se pueden guardar manualmente si hace falta.

### 5. ¿Qué medidas habéis tomado para asegurar la integridad y seguridad de vuestros datos?

Comprobamos que los datos que llegan sean correctos antes de usarlos. No guardamos datos sensibles.

### 6. ¿Cómo habéis configurado usuarios, permisos y accesos?

No hay usuarios en la app. Los permisos de los archivos se ponen en el sistema operativo.

### 7. ¿Habéis documentado la configuración técnica?

Sí, hay un README.md con instrucciones y comentarios en el código.

---

## Entornos de Desarrollo

### 1. ¿Qué entorno de desarrollo (IDE) estáis utilizando y cómo lo habéis configurado?

Usamos Visual Studio Code con extensiones para PHP, HTML y CSS.

### 2. ¿Cómo automatizáis tareas?

Usamos Composer para instalar librerías y archivos de configuración para facilitar la ejecución.

### 3. ¿Utilizáis control de versiones? ¿Qué plataforma?

Sí, usamos Git y subimos el código a GitHub para guardar los cambios y trabajar en equipo.

### 4. ¿Qué estrategia seguís para refactorizar vuestro código?

Revisamos el código y lo mejoramos cuando hace falta, dividiendo en funciones si es necesario.

### 5. ¿Cómo documentáis técnicamente el proyecto?

Con archivos Markdown (README.md) y comentarios en el código.

### 6. ¿Habéis creado diagramas de clases o de comportamiento?

No, porque el proyecto es pequeño y no lo necesita.

---

## Bases de Datos

### 1. ¿Qué sistema gestor de bases de datos habéis seleccionado? ¿Por qué?

No usamos base de datos, solo archivos de texto, porque es suficiente para este proyecto.

### 2. ¿Cómo habéis diseñado el modelo entidad-relación?

No hace falta porque no hay base de datos.

### 3. ¿Usáis vistas, procedimientos almacenados, disparadores o funciones avanzadas?

No, porque no hay base de datos.

### 4. ¿Implementáis mecanismos para proteger y recuperar datos?

No, pero los archivos se pueden copiar manualmente si hace falta.

---

## Lenguajes de Marcas y Sistemas de Gestión de Información

### 1. ¿Cómo habéis estructurado vuestros documentos HTML?

Usamos etiquetas claras y separamos el CSS y el JavaScript para que el código sea fácil de entender y mantener.

### 2. ¿Qué tecnologías utilizáis para el frontend? ¿Por qué?

Usamos HTML, CSS y JavaScript porque son los lenguajes estándar para hacer páginas web.

### 3. ¿Utilizáis JavaScript para interactuar con el DOM?

Sí, por ejemplo para mostrar los resultados al usuario:

```js
document.getElementById("salida").textContent = data.contenido;
```

### 4. ¿Habéis validado vuestros documentos HTML y CSS?

No usamos validadores automáticos, pero seguimos las buenas prácticas.

### 5. ¿Habéis implementado la conversión de datos entre formatos?

Sí, el usuario puede convertir entre TXT, CSV, JSON, XML, Markdown y PDF porque así puede usar los datos en diferentes programas.

### 6. ¿Vuestra aplicación interactúa con sistemas de gestión empresarial?

No, es una aplicación sencilla para convertir y gestionar archivos, no está conectada a sistemas empresariales.

---

## Proyecto intermodular

### 1. ¿Qué objetivo cumple vuestro software?

Permite convertir archivos de texto o CSV a otros formatos como JSON, XML, Markdown, TXT y PDF.

### 2. ¿Qué necesidad cubre o qué problema soluciona?

Ayuda a personas y empresas a transformar datos fácilmente entre diferentes formatos.

### 3. ¿Cuál es el stack de tecnologías que habéis elegido y por qué?

HTML, CSS y JavaScript para la web, PHP para el backend y la librería mpdf para crear PDFs. Son tecnologías fáciles de usar y muy comunes.

### 4. ¿Cómo habéis planteado el desarrollo por versiones?

Primero hicimos una versión básica que convierte archivos. Luego añadimos historial, exportar a PDF y mejoras en la web.

---

# Aprendizaje y notas del proyecto

## Mejoras y requisitos técnicos

- Se ha modernizado la interfaz visual con CSS avanzado (fondos degradados, tarjetas, botones modernos, responsividad, etc.).
- El proyecto requiere PHP y Composer instalados en el sistema.
- Se debe instalar la dependencia mpdf para la generación de PDFs.

## Pasos para instalar dependencias

1. Instala Composer si no lo tienes:
   ```sh
   brew install php # Si no tienes PHP
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php
   sudo mv composer.phar /usr/local/bin/composer
   ```
2. Instala las dependencias del proyecto (incluye mpdf):
   ```sh
   cd /Applications/MAMP/htdocs/GitHub/ConversorArchivos
   composer install
   ```

## Notas de desarrollo

- El Service Worker ahora solo cachea archivos existentes.
- Se ha añadido manejo global de errores en PHP para respuestas JSON limpias.
- El historial se almacena tanto localmente (localStorage) como en el servidor (historial.txt).
- El frontend es responsivo y visualmente atractivo.

---

**Última actualización:** 30 de abril de 2025
