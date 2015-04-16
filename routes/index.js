var express = require('express');
var router = express.Router();


router.get('/',function(req, res) {
  res.render('nagaHome',{title: 'Naga'});
});

router.get('/nagaHomeArabic',function(req, res) {
  res.render('nagaHomeArabic',{title: 'naga'});
});

module.exports = router;
