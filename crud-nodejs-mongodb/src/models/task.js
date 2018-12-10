const mongoose = require('mongoose');
const Schema = mongoose.Schema;
//Definimos el esquema
const TaskSchema = new Schema({
    title: String,
    description: String,
    status: {
        type: Boolean,
        default: false
        }
});

// Exporto mi modelo para utilizarlo dandole un nombre(task) a mi schema
module.exports = mongoose.model('task',TaskSchema);
