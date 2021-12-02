const express = require('express');
const path = require('path');
const mysql = require('mysql');
const { isBuffer } = require('util');

require('dotenv').config()

const app = express();
const port = process.env.PORT || 8000;

// Set static folder
app.use(express.static(path.join(__dirname, 'public')))

//Connection pool
const pool = mysql.createPool({
connectionLimit : 100,
host : process.env.DB_HOST,
user : process.env.DB_USER,
password : process.env.DB_PASS,
database : process.env.DB_NAME    
});

//connect to DB
pool.getConnection((err, connection) => {
    if(err) throw err; //not connected
    console.log('Connected as ID ' + connection.threadId);
});

//Router
app.get('', (req, res) => {
    res.render('index');
});

const routes = require('./server/routes/user');
app.use('/', routes);

app.listen(port, () => console.log(`Server started on port ${port}`));
app.listen(port, () => console.log(`Listening on port ${port}`));