# Proyecto DW - API de Usuarios en CodeIgniter 4

Este proyecto es una API REST básica para manejar usuarios (listar, crear, actualizar) y una vista web para mostrar la tabla de usuarios.

---

## URLs base

- Ruta base web (tabla usuarios):  
  `http://localhost/nuevo-proyectoDW/`

- Ruta base API:  
  `http://localhost/nuevo-proyectoDW/api/usuarios`

---

## Endpoints y cómo usarlos en Postman

### 1. Listar todos los usuarios (GET)

- Método: `GET`  
- URL: `http://localhost/nuevo-proyectoDW/api/usuarios`  
- Headers: No se requiere nada especial  
- Body: No se usa  
- Descripción: Obtiene la lista completa de usuarios en formato JSON.

---

### 2. Crear un nuevo usuario (POST)

- Método: `POST`  
- URL: `http://localhost/nuevo-proyectoDW/api/usuarios`  
- Headers:  
  - `Content-Type`: `application/json`  
- Body (raw JSON):  
```json
{
  "nombre": "Nuevo Usuario",
  "correo": "nuevo.usuario@pucesi.edu.ec",
  "cedula": "1112223334",
  "estado": "1"
}
