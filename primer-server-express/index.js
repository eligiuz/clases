const express = require('express');
const morgan = require('morgan');
const app = express();

// Settings
app.set('appName', 'Mi primer server');

//middlewares
app.use(morgan('combined'));

// rutas
app.get('/', (req, res) => {
	res.end('Hola a Todos!');
});

app.get('/login', (req, res) => {
	res.end('Aquí va el login!');
});

app.get('*', (req, res) => {
	res.end('Archivo no encontrado');
});

app.listen(3000, () => {
	console.log('Servidor funcionando');
	console.log('Nombre de la App: ', appName);
});