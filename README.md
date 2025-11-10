# 🏥 Sistema de Gestión de Turnos - CEMESA (2024)

**Autor:** Mauricio Briceño  
**Rol:** Ingeniero en Sistemas  
**Institución:** Hospital CEMESA  
**Año:** 2024  

---

## 📋 Descripción general

Este proyecto fue desarrollado como parte de mi **práctica profesional en CEMESA (Centro Médico Especialidades S.A.)**, con el propósito de optimizar el **flujo de atención al paciente** en los distintos departamentos de diagnóstico por imagen.

El sistema implementa una **arquitectura MVC (Modelo-Vista-Controlador)** y permite gestionar turnos en tiempo real, priorizando pacientes según su condición (emergencia, tercera edad o atención regular), con una interfaz para el personal técnico y una **pantalla de visualización pública** que muestra el estado de la fila.

---

## 🧭 Objetivos del sistema

- Organizar el flujo de pacientes por orden y prioridad.  
- Digitalizar el registro y atención de turnos.  
- Facilitar el control por departamento (Radiología, Ultrasonido, etc.).  
- Mostrar en pantalla los turnos activos en tiempo real.  
- Reducir el tiempo de espera y mejorar la experiencia del paciente.

---

## ⚙️ Funcionalidades principales

✅ Registro y control de pacientes en fila.  
✅ Asignación de prioridad (emergencia, tercera edad, normal).  
✅ Gestión de departamentos:
   - Rayos X  
   - Ultrasonido  
   - Tomografía Computarizada  
   - Mamografía  
   - Fluoroscopia  
   - Resonancia Magnética  
✅ Pantalla de visualización pública (`/Pantalla`) con actualización dinámica.  
✅ Módulo de cronómetro para medir el tiempo de atención.  
✅ Comunicación con el backend mediante peticiones AJAX.  

---

## 🧱 Estructura del proyecto

ProyectoPractica/
│
├── ajax/ # Solicitudes asíncronas por departamento
│ ├── mamo.ajax.php
│ ├── rayosx.ajax.php
│ ├── rm.ajax.php
│ ├── tcompu.ajax.php
│ ├── turnero.ajax.php
│ └── ultrasonido.ajax.php
│
├── controladores/ # Lógica de negocio por módulo
│ ├── fluoroscopia.controlador.php
│ ├── guardado.controlador.php
│ ├── mamo.controlador.php
│ ├── rayosx.controlador.php
│ ├── rm.controlador.php
│ ├── tcompu.controlador.php
│ ├── turnero.controlador.php
│ └── ultrasonido.controlador.php
│
├── modelos/ # Conexión y consultas a base de datos
│
├── vistas/
│ ├── assets/ # Estilos, imágenes y scripts
│ └── modulos/
│ ├── layout/
│ ├── citatorio.php
│ ├── fluoroscopia.php
│ ├── guardado.php
│ ├── mamografia.php
│ └── pagina_en_blanco.php
│
├── Pantalla/ # Módulo visual de turnos
├── Pro/ # Módulos de procesamiento
└── index.php # Página principal del sistema


---

## 🧰 Tecnologías utilizadas

| Categoría | Tecnologías |
|------------|-------------|
| **Lenguaje principal** | PHP 8 |
| **Frontend** | HTML5, CSS3, JavaScript, DataTables, Bootstrap |
| **Backend** | PHP (arquitectura MVC) |
| **Base de datos** | MySQL |
| **Comunicación** | AJAX |
| **Íconos e interfaz** | Font Awesome / Bootstrap Icons |

---

## 🚀 Instalación y ejecución local

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/bricode96/ProyectoPractica2024.git

2. Mover el proyecto a tu servidor local (XAMPP, Laragon, etc.):

C:\xampp\htdocs\ProyectoPractica2024

3. Crear la base de datos en MySQL:

* Crea una base llamada cemesa_turnos.

* Importa el archivo .sql correspondiente (ubicado en /database o solicitado al autor).

4 Configurar la conexión en modelos/Conexion.php:

$conexion = mysqli_connect('localhost', 'root', '', 'cemesa_turnos');

5. Ejecutar el proyecto:

http://localhost/ProyectoPractica2024/

🧩 Módulos del sistema
Módulo	Descripción
Registro	Permite ingresar nuevos pacientes con prioridad y departamento.
Gestión de turnos	Control del orden de atención, pausa y finalización de turnos.
Pantalla pública	Visualiza en tiempo real los pacientes llamados y en espera.
Departamentos	Sección para técnicos según área médica (Rayos X, TC, RM, etc.).
Cronómetro	Mide el tiempo de atención de cada paciente.
🧠 Conceptos aplicados

Arquitectura MVC (Modelo–Vista–Controlador).

Manipulación de datos mediante AJAX.

Renderizado dinámico con DataTables.

Lógica condicional de prioridad.

Actualización en tiempo real de la fila de pacientes.

👨‍💻 Rol y aportes personales

Durante la práctica en CEMESA, fui responsable de:

El diseño y desarrollo completo del sistema de turnos.

La integración con la base de datos hospitalaria.

La optimización del flujo de atención en radiología.

La capacitación del personal técnico para su uso.

La creación de un módulo visual para mostrar la fila en pantallas de TV.

🏁 Resultados obtenidos

Reducción de tiempos de espera en atención diagnóstica.

Eliminación de procesos manuales en papel.

Flujo de atención más ordenado y automatizado.

Interfaz intuitiva para personal técnico y administrativo.

📞 Contacto

Mauricio Briceño
💼 Ingeniero en Sistemas | Técnico en Hemodinamia
📍 San Pedro Sula, Honduras
📧 tuemail@ejemplo.com

🔗 GitHub: bricode96

