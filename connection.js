var mysql = require('mysql');
var con = mysql.createConnection({
 host: "localhost",
 user: "root",
 password: "",
 database:"event"
});

module.exports=con;
