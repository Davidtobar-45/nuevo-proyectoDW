// authController.js
const express = require('express');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcrypt');
const router = express.Router();
const users = []; // Simulación de una base de datos

// Registro
router.post('/register', async (req, res) => {
  const { nombre, correo, contraseña, pais } = req.body;
  const hashedPassword = await bcrypt.hash(contraseña, 10);
  const user = { nombre, correo, contraseña: hashedPassword, pais };
  users.push(user);
  res.status(201).json({ mensaje: 'Usuario registrado con éxito' });
});

// Inicio de sesión
router.post('/login', async (req, res) => {
  const { correo, contraseña } = req.body;
  const user = users.find(u => u.correo === correo);
  if (!user || !(await bcrypt.compare(contraseña, user.contraseña))) {
    return res.status(401).json({ mensaje: 'Credenciales inválidas' });
  }
  const token = jwt.sign({ correo: user.correo }, 'secreto', { expiresIn: '1h' });
  res.json({ token });
});

module.exports = router;

