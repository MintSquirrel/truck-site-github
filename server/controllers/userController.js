const mysql = require('mysql');

//Connection pool
const pool = mysql.createPool({
    connectionLimit : 100,
    host : process.env.DB_HOST,
    user : process.env.DB_USER,
    password : process.env.DB_PASS,
    database : process.env.DB_NAME    
    });

//view users
exports.view = (req, res) => {
    pool.getConnection((err, connection) => {
        if(err) throw err; //not connected
        console.log('Connected as ID ' + connection.threadId),

        //user connection
        connection.query('SELECT * FROM register', (err, rows) => {
            //when done with the connection, release it
            connection.release();

            if(!err){
                res.render('index', {rows});
            } else{
                console.log(err);
            }
            console.log('The data from user table: \n', rows);
        });
    });

};