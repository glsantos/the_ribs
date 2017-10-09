
var app = require('express')();
var http = require('http').createServer(app);

var io = require('socket.io').listen(http);

io.sockets.on('connection', function(cliente){

		console.log("Usuário Conectado");
});

app.get('/', function(req, res){

	res.send("Olá!");
});

app.post('/enviar', function(req, res){
		
    if(req.method=='POST') {
			console.log("POST");
            var body='';
            req.on('data', function (data) {
                body +=data;
            });
            req.on('end',function(){
                var POST =  qs.parse(body);
                console.log(POST);
            });
    }
    else if(req.method=='GET') {
        var url_parts = url.parse(req.url,true);
        console.log(url_parts.query);
    }

});

http.listen(8888, function(){

	console.log("OK");
});
