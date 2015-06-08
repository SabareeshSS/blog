var express       = require('express');
var routes        = require('./routes/index');

var cookieParser  = require('cookie-parser');
var tml           = require('tml-express');

var app           = express();

app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.use(cookieParser());
app.use(express.static(__dirname + '/public'));

app.use(tml.init("ff08ec9c583a98d002f23e0bad46ca24f103fb54b87517d28c56791233618a4c", {
  cache: {
    adapter: 'memcache',
    hosts: ["localhost:11211"],
    namespace: "my_app",
    invalidate: {
      auth: function(req) {
        return false;
      }
    }
  }

}));

app.use('/', routes);

app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.render('error', {
    message: err.message,
    error: err
  });
});

app.listen(8000);