# Aprendizaje del Proyecto: Conversor de Archivos

## Programación

### 1. Elementos fundamentales del código
- **Variables**: Ejemplo en PHP:
  ```php
  $contenido = $input['contenido'];
  $tipo = strtolower($input['tipo']);
  $formato = strtolower($input['formato']);
  $fecha = date("Y-m-d_H-i-s");
  $archivoFinal = "convertido_$fecha.$formato";
  ```
- **Constantes**: No se usan constantes explícitas, pero sí valores fijos como nombres de archivos.
- **Operadores**: Asignación (`=`), comparación (`===`, `==`, `!=`), concatenación (`.`), aritméticos (`+`, `-`), lógicos (`&&`, `||`).
- **Tipos de datos**: Strings, arrays, booleanos, enteros, objetos (JSON).

---

### 2. Estructuras de control
- **Selección**: Uso de `if`, `else`, ejemplo:
  ```php
  if ($formato === "json") {
      if ($tipo === "csv") {
          // Conversión CSV a JSON
      } else {
          // Otro tipo
      }
  }
  ```
- **Repetición**: Uso de `foreach`, ejemplo:
  ```php
  foreach ($filas as $fila) {
      // Procesar cada fila
  }
  ```
- **Saltos**: Uso de `return`, `exit` para finalizar ejecución en caso de error.

---

### 3. Control de excepciones y errores
- No se usa `try-catch`, pero sí validaciones y respuestas de error:
  ```php
  if (!isset($input['contenido'], $input['tipo'], $input['formato'])) {
      echo json_encode(["error" => "Faltan datos"]);
      exit;
  }
  ```

---

### 4. Documentación en el código
- Se usan comentarios explicativos:
  ```php
  // Carga mpdf si está instalado
  require __DIR__ . '/vendor/autoload.php';
  ```

---

### 5. Paradigma aplicado
- Predomina la **programación estructurada** (funciones y procedimientos).
- Se usa OOP solo para la librería externa `mpdf`.

---

### 6. Clases y objetos principales
- Solo se instancia la clase externa para PDF:
  ```php
  $mpdf = new \Mpdf\Mpdf();
  $mpdf->WriteHTML($html);
  $mpdf->Output($archivoFinal, \Mpdf\Output\Destination::FILE);
  ```

---

### 7. Herencia, polimorfismo, interfaces
- No se usan conceptos avanzados de OOP en el código propio.

---

### 8. Gestión de información mediante archivos
- Se usan archivos para guardar resultados e historial:
  ```php
  file_put_contents($archivoFinal, $resultado);
  file_put_contents("historial.txt", "[$fecha] $tipo → $formato ($archivoFinal)\n", FILE_APPEND);
  ```
- Interfaz gráfica: HTML + JS para interacción con el usuario.

---

### 9. Estructuras de datos utilizadas
- Uso de arrays para manipular datos:
  ```php
  $filas = array_map("str_getcsv", explode("\n", trim($contenido)));
  $cabeceras = array_shift($filas);
  $data = [];
  foreach ($filas as $fila) {
      if (count($fila) > 1) {
          $data[] = array_combine($cabeceras, $fila);
      }
  }
  ```

---

### 10. Técnicas avanzadas
- Flujos de entrada/salida: lectura y escritura de archivos.
- No se usan expresiones regulares.

---

## Sistemas Informáticos

### 1. Características del hardware
- **Desarrollo**: Mac (MAMP), entorno local.
- **Producción**: Servidor web básico, requisitos mínimos para PHP y Composer.

---

### 2. Sistema operativo
- **Desarrollo**: macOS.
- **Producción**: Linux.

---

### 3. Configuración de redes
- HTTP/HTTPS, red local en desarrollo.
- Sin medidas avanzadas de seguridad en el código base.

---

### 4. Copias de seguridad
- No hay sistema automático, pero los archivos generados pueden respaldarse manualmente.

---

### 5. Integridad y seguridad de datos
- Validación de entrada.
- No se almacenan datos sensibles.

---

### 6. Usuarios, permisos y accesos
- No hay gestión de usuarios en la app. Los permisos de archivos deben configurarse en el sistema operativo.

---

### 7. Documentación técnica
- `README.md` con instrucciones.
- Comentarios en el código.

---

## Entornos de Desarrollo

### 1. Entorno de desarrollo (IDE)
- **Visual Studio Code**.
- Extensiones para PHP, HTML, CSS.

---

### 2. Automatización de tareas
- **Composer** para dependencias.
- Scripts de ejecución en `.replit` y `replit.nix`.

---

### 3. Control de versiones
- **Git**.
- **Plataforma**: GitHub.

---

### 4. Refactorización
- Refactorización manual, revisión de código y modularización en funciones.

---

### 5. Documentación técnica
- **Markdown** (`README.md`).
- **Comentarios** en el código.

---

### 6. Diagramas
- No se han creado diagramas de clases ni de comportamiento.

---

## Bases de Datos

### 1. Sistema gestor de bases de datos
- No se usa SGBD. Se usan archivos de texto (`historial.txt`).

---

### 2. Modelo entidad-relación
- No aplica por no usar base de datos relacional.

---

### 3. Vistas, procedimientos, disparadores
- No aplica.

---

### 4. Protección y recuperación de datos
- Archivos: Se pueden respaldar manualmente.

---

## Lenguajes de Marcas y Sistemas de Gestión de Información

### 1. Estructura de documentos HTML
- Uso de etiquetas semánticas y separación de CSS y JS.

---

### 2. Tecnologías frontend
- **CSS** para estilos.
- **JavaScript** para lógica SPA y PWA.

---

### 3. Interacción con el DOM
- Sí, mediante JavaScript:
  ```js
  document.getElementById("salida").textContent = data.contenido;
  ```

---

### 4. Validación de HTML y CSS
- No se menciona validación automática, pero el código es estándar.

---

### 5. Conversión de datos entre formatos
- Sí, conversión entre TXT, CSV, JSON, XML, Markdown y PDF.

---

### 6. Integración con sistemas empresariales
- No, es una aplicación de gestión documental simple, no integrada con sistemas empresariales.

---

## Proyecto intermodular

### 1. Objetivo del software
- Convertir archivos de texto/CSV a varios formatos (JSON, XML, Markdown, TXT, PDF).

### 2. Necesidad/problema que soluciona
- Facilita la conversión y exportación de datos en distintos formatos para usuarios y pequeñas empresas.

### 3. Stack de tecnologías
- **Frontend**: HTML, CSS, JavaScript.
- **Backend**: PHP.
- **PDF**: mpdf/mpdf.
- **PWA**: Manifest, Service Worker.

### 4. Desarrollo por versiones
- **Versión 1**: Conversión básica y exportación.
- **Actualizaciones**: Añadido historial, exportación a PDF, modo PWA, mejoras en la interfaz.
