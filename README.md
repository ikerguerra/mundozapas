# Mundo zapas
Aplicación desarrollada para el curso Desarrollo de Tecnologías Web

## **Instalar y Usar Composer para Bootstrap**

### **1. Instalar Composer**

1. Descarga el instalador de Composer desde la web oficial:  
   👉 [https://getcomposer.org/Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)
2. Durante la instalación, asegúrate de que:
   - PHP esté instalado y su ruta esté configurada en las variables de entorno.
   - La opción **"Add Composer to PATH"** esté marcada.
3. Ejecuta el instalador y sigue las instrucciones.
4. Verifica la instalación abriendo una terminal (CMD o PowerShell) y ejecutando:
   ```sh
   composer -V
   ```
5. Probablemente haya que reiniciar VSCode

### **2. Instalar Bootstrap con Composer**
Una vez que tengas Composer instalado, puedes instalar Bootstrap en tu proyecto ejecutando:

```sh
composer require twbs/bootstrap
```

Esto descargará Bootstrap dentro del directorio vendor/twbs/bootstrap/.

### **3. Compilar SCSS**

```sh
sass public/assets/scss/custom.scss public/assets/css/custom.css
```
