# Conversor de Archivos

Convierte archivos de texto o CSV a JSON, XML, Markdown, TXT y PDF desde una interfaz web moderna.

## Características

- Interfaz visual moderna y responsiva
- Conversión entre múltiples formatos (TXT, CSV, JSON, XML, Markdown, PDF)
- Historial local y en servidor
- Generación de PDF usando mpdf
- Service Worker para funcionamiento offline básico

## Requisitos

- PHP 7.4 o superior
- Composer
- Extensión mbstring habilitada en PHP

## Instalación

1. Instala Composer si no lo tienes:
   ```sh
   brew install php # Si no tienes PHP
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php
   sudo mv composer.phar /usr/local/bin/composer
   ```
2. Instala las dependencias del proyecto:
   ```sh
   cd /Applications/MAMP/htdocs/GitHub/ConversorArchivos
   composer install
   ```
3. Inicia tu servidor local (por ejemplo, MAMP, XAMPP o el servidor embebido de PHP):
   ```sh
   php -S localhost:8000
   ```
4. Accede a la aplicación en tu navegador:
   - http://localhost:8000/index.html
   - O la ruta correspondiente en tu entorno MAMP/XAMPP

## Uso

1. Escribe o pega tu texto/CSV.
2. Selecciona el tipo de entrada y el formato de salida.
3. Haz clic en "Convertir".
4. Descarga el resultado o cópialo al portapapeles.

## Notas técnicas

- El Service Worker solo cachea archivos existentes.
- El backend siempre responde en JSON, incluso ante errores.
- El historial se almacena en localStorage y en el servidor (historial.txt).

## Créditos

- Librería [mpdf/mpdf](https://mpdf.github.io/) para generación de PDF.

---

**Actualizado:** 30 de abril de 2025
