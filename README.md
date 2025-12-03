Paricl 3 de Recuperación de Ingenieria WEB
José Centella
8-1009-1127

Este proyecto consiste en un sistema básico de registro y consulta de empleados, construido con:

PHP 8+

PDO para conexión segura a MySQL

AJAX (XMLHttpRequest)

HTML + CSS nativo

XAMPP como entorno de ejecución

El objetivo fue migrar una versión antigua del proyecto, que utilizaba funciones obsoletas (mysql_* y DBManager.php), hacia una arquitectura moderna basada en PDO, clases organizadas por responsabilidades y validaciones seguras tanto en cliente como en servidor.

🚀 Funcionalidades implementadas
✔️ Registro de empleados

El usuario ingresa:

Nombre

Departamento

Sueldo

El formulario envía los datos mediante AJAX a registro.php, donde se validan e insertan mediante PDO.

✔️ Consulta dinámica

Después de cada registro o actualización, el sistema recarga automáticamente la tabla de empleados mediante:

include('consulta.php');

Respuesta enviada por AJAX

La tabla muestra:

Nombre

Departamento

Sueldo

Ordenados alfabéticamente.

✔️ Validaciones completas

Cliente (JavaScript): campos obligatorios, sueldo numérico y mayor a cero.

Servidor (PHP): sanitización, validación de dominio (Cargo y Salario), try/catch con PDO.
