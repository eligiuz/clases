var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function (req, res, next) {
    'use strict';
    res.send('respond with a resource');
});

/* Agregar cool */
router.get('/cool', function (req, res, next) {
    'use strict';
    res.send('You\'re so cool');
});


module.exports = router;
