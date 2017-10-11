
var app = require('express')();
var http = require('http').createServer(app);

var mysql = require('mysql');

var conexao = mysql.createConnection({

	host:"10.107.144.52",
	user:"root",
	password:"bcd127",
	database:"dbtheribs_ws"
});

app.get('/', function(req, res){

	res.send("Olá!");
});

app.get('/enviar', function(req, res){
	
	res.send("merdaaa");

	/*var _nome = req.query.nome;
	var _telefone = req.query.telefone;
	var _email = req.query.email;
	var _classificacao = req.query.classificacao;
	var _comentario = req.query.comentario;

	conexao.connect(function(err){

		var _valores = "'"+_nome+"','"+_telefone+"','"+_email+"','"+_classificacao+"','"+_comentario+"'";
		var insert = "insert into tbl_entre_contato(nome, telefone, email, classificacao, comentario) values("+_valores+");";
		res.send(insert);
		conexao.query(insert, function(err, result) {
			console.log("Inseriu no banco! :)");
			//res.send("Inseriu");
		})

	});*/

});

http.listen(8888, function(){

	console.log("OK");
});
