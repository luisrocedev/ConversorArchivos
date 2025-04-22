# 🧩 Conversor de Archivos (SPA + API + PWA)

Este proyecto es una aplicación web ligera que permite convertir texto o archivos CSV en distintos formatos: `JSON`, `XML`, `Markdown`, `TXT` y `PDF`. Diseñado como **Single Page Application (SPA)**, incluye una **API en PHP**, es **Progresive Web App (PWA)** y guarda el **historial local y del servidor**.

---

## 🚀 Funcionalidades principales

- ✅ Conversión de datos en varios formatos
- ✅ Exportación a PDF con `mpdf`
- ✅ Visualización del historial local y del servidor
- ✅ Copia rápida del contenido al portapapeles
- ✅ Guardado en `localStorage` para uso offline
- ✅ Instalación como PWA en cualquier dispositivo (iOS, Android, escritorio)

---

## 🧪 Tecnologías usadas

- HTML, CSS, JavaScript (SPA)
- PHP (API backend)
- `mpdf/mpdf` para generación de PDFs
- Manifest + Service Worker (PWA)

---

## 🔧 Instalación (modo local)

1. Clona el repositorio:

```bash
git clone https://github.com/usuario/conversorarchivos.git
cd conversorarchivos
```

2. Instala `mpdf` si deseas exportar a PDF:

```bash
composer require mpdf/mpdf
```

3. Levanta el servidor PHP:

```bash
php -S localhost:8000
```

4. Abre tu navegador en:

```
http://localhost:8000
```

---

## 📲 Instalación como app (PWA)

1. Abre la app en tu navegador (Safari, Chrome, etc).
2. Pulsa el botón de compartir / menú.
3. Selecciona “Añadir a pantalla de inicio”.
4. ¡Listo! Puedes usarla como app sin conexión.

---

## 🔮 Futuras implicaciones

Este proyecto puede ser utilizado como módulo o microservicio para:

- Exportar facturas o informes en un software PMS.
- Generar documentos automatizados en otras plataformas.
- Servir como plantilla base para otras apps SPA + API.
- Reutilizar en proyectos con múltiples formatos de salida (texto → doc → json → pdf).

---

## 🧠 Autor

**Luis Jahir Rodríguez Cedeño**  
Proyecto desarrollado como práctica de desarrollo web, backend modular, y diseño progresivo (PWA).

---

## 📘 Licencia

MIT — Puedes usar, adaptar y compartir este proyecto libremente.