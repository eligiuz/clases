const path = require('path');
const express = require('express');
const morgan = require('morgan');
const mongoose = require('mongoose');

const app = express();

/* connecting to db */
mongoose.connect('mongodb://localhost/crud-mongo').then (db => console.log('Db connected'))
    .catch(err => console.log(err));

/* importing routes */
// importo las rutas de la carpeta routes
const indexRoutes = require('./routes/index');

/* setting */
// Se crea la variable port y a esta se le asigna un puerto dle sistema y si esta ocupado agrega por default 3000
app.set('port', process.env.PORT || 3000);

//path.join sirve para concatenar directorios. __dirname es una variable que nos da acceso a la ruta principal sin importar el OS. views contien las vistas del programa.
app.set('views', path.join(__dirname, "views"));
app.set('view engine', 'ejs');

/* middlewares - funciones que se ejecutan antes de las rutas*/
app.use(morgan('dev'));
//urlencodecse utiliza par interpretar las paginas html. extended: false es porque solo envio texto
app.use(express.urlencoded({extended: false}));

/* routes */
// se utilizan las rutas
app.use('/', indexRoutes);

/* starting the server */
app.listen(app.get('port'), () => {
    console.log(`Server on port ${app.get('port')}`);
});
