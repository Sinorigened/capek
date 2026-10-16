# Cómo publicar un cambio en capek.fun

Trabaja siempre en este repositorio. No conectes Git de Hostinger a `public_html`: esa carpeta ya tiene WordPress y Hostinger solo despliega en una carpeta vacía. Un despliegue a la raíz del sitio puede tumbar capek.fun.

El camino práctico es bajar el ZIP desde GitHub y reemplazar solo el tema.

## 1. Bajar el tema

1. Abre https://github.com/Sinorigened/capek
2. Pulsa el botón verde **Code**.
3. Pulsa **Download ZIP**.
4. Descomprime el archivo. Queda una carpeta llamada `capek-main`.
5. Renómbrala a `capek`. El nombre tiene que ser siempre `capek`, si no WordPress lo trata como otro tema.
6. Comprime esa carpeta `capek` (clic derecho → Comprimir / Enviar a → Carpeta comprimida). El ZIP debe abrirse y mostrar la carpeta `capek`, y dentro `style.css`.

## 2. Primera instalación

1. Entra a https://capek.fun/wp-admin
2. **Apariencia → Temas → Añadir nuevo → Subir tema**.
3. Elige el ZIP y pulsa **Instalar ahora**.
4. Pulsa **Activar**.
5. Entra a **Ajustes → Enlaces permanentes** y pulsa **Guardar**, sin cambiar nada. Eso crea la ruta `/concierge/`.

## 3. Cuando ya está instalado y solo quieres actualizar

No subas el ZIP por Apariencia: WordPress no deja reemplazar un tema que ya existe.

1. En hPanel de Hostinger abre el sitio capek.fun.
2. **Archivos → Administrador de archivos**.
3. Entra a `public_html/wp-content/themes/`.
4. Si ya hay una carpeta `capek`, bórrala.
5. Sube el ZIP nuevo y pulsa **Extraer** en esa misma carpeta `themes`.
6. Tiene que quedar `public_html/wp-content/themes/capek/style.css`.
7. Recarga el sitio. No hace falta volver a activar el tema si la carpeta se llama igual.

## 4. Qué no tocar

- No borres `public_html` ni `wp-admin`.
- No desactives el tema para editar un texto: edita el PHP en GitHub, vuelve a bajar el ZIP y reemplaza la carpeta.
- Los textos de portada están en `front-page.php`. Los de Concierge, en `page-concierge.php`. Los colores, en `style.css`.
