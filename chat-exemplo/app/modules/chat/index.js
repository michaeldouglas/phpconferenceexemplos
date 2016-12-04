var express = require('express');
var router  = express.Router();

// Rota para atualizar o sync
router.get('/', require('./screenconversation/index'))

module.exports = router;