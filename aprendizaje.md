---
marp: true
theme: gaia
paginate: true
---

# 🗂️ Aprendizaje sobre el Proyecto ConversorArchivos

---

# Programación

## 1. Elementos fundamentales del código
- Uso de variables y constantes en PHP y JavaScript.
- Tipos: string, int, boolean, array, objeto.
- Ejemplo:
```php
$archivo = $_FILES['archivo'];
$historial = file('historial.txt');
```

---

## 2. Estructuras de control
- Condicionales: if, else, switch.
- Bucles: for, foreach.
- Ejemplo:
```php
foreach ($historial as $linea) {
  // ...
}
```

---

## 3. Control de excepciones y gestión de errores
- Uso de try-catch en PHP para manejar errores de archivos y lógica.
- Validaciones en frontend y backend.

---

## 4. Documentación del código
- Comentarios en PHP y JS, y archivos markdown (README, aprendizaje, guion).

---

## 5. Paradigma aplicado
- Programación modular y estructurada.
- Separación de lógica en archivos: Api.php, Historial.php, BorrarHistorial.php, JS para la interfaz.

---

## 6. Clases y objetos principales
- Uso de funciones y arrays para gestionar archivos y el historial.

---

## 7. Conceptos avanzados
- Generación de PDFs con librerías externas (mPDF).
- Gestión de historial de conversiones.
- Uso de Composer para dependencias.

---

## 8. Gestión de información y archivos
- Uso de archivos de texto (historial.txt) para almacenar el historial.
- Posibilidad de ampliar con base de datos.

---

## 9. Estructuras de datos utilizadas
- Arrays y objetos para gestionar archivos y el historial.

---

## 10. Técnicas avanzadas
- Validación de archivos y entradas de usuario.
- Automatización de tareas con Composer.

---

# Sistemas Informáticos

## 1. Características del hardware
- Desarrollo y pruebas en MacBook (macOS), compatible con cualquier servidor PHP.

---

## 2. Sistema operativo
- Multiplataforma: macOS, Linux, Windows (con XAMPP/MAMP/WAMP).

---

## 3. Configuración de redes
- Acceso por HTTP en red local o internet.

---

## 4. Copias de seguridad
- Uso de Git para control de versiones y backups manuales de archivos.

---

## 5. Integridad y seguridad de datos
- Validación de archivos y entradas de usuario.
- Uso de permisos en el servidor.

---

## 6. Usuarios, permisos y accesos
- No hay gestión avanzada de usuarios, pero se puede ampliar.

---

## 7. Documentación técnica
- Archivos markdown y comentarios en el código.

---

# Entornos de Desarrollo

## 1. Entorno de desarrollo (IDE)
- Visual Studio Code con extensiones para PHP y JS.

---

## 2. Automatización de tareas
- Uso de Composer para instalar dependencias.

---

## 3. Control de versiones
- Git y GitHub.

---

## 4. Refactorización
- Mejoras periódicas en la estructura y modularidad del código.

---

## 5. Documentación técnica
- README.md, aprendizaje.md, guion.md.

---

## 6. Diagramas
- Opcional: diagramas de flujo para la arquitectura del sistema.

---

# Bases de Datos

## 1. Sistema gestor
- No se usa base de datos, se emplean archivos de texto.

---

## 2. Modelo entidad-relación
- No aplica actualmente.

---

## 3. Funcionalidades avanzadas
- Posibilidad de integración futura con bases de datos.

---

## 4. Protección y recuperación de datos
- Backups manuales de archivos y control de versiones en Git.

---

# Lenguajes de Marcas y Gestión de Información

## 1. Estructura de HTML
- Uso de etiquetas semánticas en index.html.

---

## 2. Tecnologías frontend
- HTML, CSS, JavaScript.

---

## 3. Interacción con el DOM
- JS para mostrar resultados y gestionar la interfaz.

---

## 4. Validación de HTML y CSS
- Validadores online y extensiones del IDE.

---

## 5. Conversión de datos (XML, JSON)
- Uso de JSON para algunas operaciones y exportaciones.

---

## 6. Integración con sistemas de gestión
- Posibilidad de integración futura mediante APIs.

---

# Proyecto Intermodular

## 1. Objetivo del software
- Facilitar la conversión y gestión de archivos de distintos formatos.

---

## 2. Necesidad o problema que soluciona
- Permite convertir archivos y mantener un historial de conversiones.

---

## 3. Stack de tecnologías
- PHP, JavaScript, HTML, CSS, Composer, mPDF.

---

## 4. Desarrollo por módulos
- Módulo de conversión, historial y utilidades.

---

<style>
section code, section pre {
  font-size: 0.8em;
}
.small-code code, .small-code pre {
  font-size: 0.7em;
}
</style>