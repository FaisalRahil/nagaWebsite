var express = require('express');
var router = express.Router();


router.get('/',function(req, res) {
  res.render('nagaHome',{title: 'Naga'});
});

router.get('/naga',function(req, res) {
  res.render('naga',{title: 'naga'});
});

module.exports = router;
