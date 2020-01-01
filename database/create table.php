<?php
//Server connection
$conn=mysql_connect("localhost","id12020741_mohit","mohit@123") or die("Server not connected");
//mysql_query("create database exam");
mysql_select_db("id12020741_exam",$conn);


//Extra
mysql_query("create table extra(info varchar(800) not null);");
mysql_query("insert into extra(info) values('Welcome to Online Exam 2018');");

//admin table
mysql_query("create table admin(f char, user varchar(30) primary key, name varchar(35) not null, pass varchar(25) not null, address varchar(150) not null, mobile varchar(10) not null, email varchar(35) not null);");
//insert into admin table
mysql_query("INSERT INTO `admin`(`f`, `user`, `name`, `pass`, `address`, `mobile`,email) VALUES ('A','Sanjeev@123', 'Sanjeev', '1234', 'Yamunanager', '9068456423', 'sanjeev@sjpdamla.ac.in');");

mysql_query("INSERT INTO `admin`(`f`, `user`, `name`, `pass`, `address`, `mobile`,email) VALUES ('T','Aman@123', 'Amandeep', '1234', 'Yamunanager', '0987654321','aman@sjpdamla.ac.in');");

mysql_query("INSERT INTO `admin`(`f`, `user`, `name`, `pass`, `address`, `mobile`,email) VALUES ('T','Rohit@123', 'Rohit', '1234', 'Yamunanager', '0987654321','rohit@sjpdamla.ac.in');");

mysql_query("INSERT INTO `admin`(`f`, `user`, `name`, `pass`, `address`, `mobile`,email) VALUES ('T','Meenu@123', 'Meenu', '1234', 'Yamunanager', '0987654321','meenu@sjpdamla.ac.in');");

mysql_query("INSERT INTO `admin`(`f`, `user`, `name`, `pass`, `address`, `mobile`,email) VALUES ('T','Richa@123', 'Richa', '1234', 'Yamunanager', '0987654321','richa@sjpdamla.ac.in');");


//user table
mysql_query("create table userid(id varchar(25) primary key, name varchar(35) not null, email varchar(35) not null, mobile varchar(10) not null, pass varchar(25) not null, address varchar(50) not null);");
//insert query
mysql_query("insert into userid(id,pass,name,email,mobile,address) values('mohit','1234','Mohit Kumar','mksjppdamla27@gmail.com','9068456423','VPO Dukheri, Ambala Cantt');");

mysql_query("insert into userid(id,pass,name,email,mobile,address) values('Abhi','1234','Abhishek','abhishek27@gmail.com','1234567890','Yamunanagar');");


//Subject
mysql_query("create table subject(sub_id int unique not null, sub varchar(50) not null unique, user varchar(50) not null, date date not null);");

//Test
mysql_query("create table test(test_id int unique not null, sub varchar(50) not null, test_name varchar(50) not null, total_que int not null);");

//addque
mysql_query("create table addque(que_id int unique, test_id int not null, sub varchar(50) not null, que_des varchar(200) not null, a1 varchar(100) not null, a2 varchar(100) not null, a3 varchar(100) not null, a4 varchar(100) not null, true_ans int not null, date date not null);");

//create useranswer table
mysql_query("create table userans(sess_id varchar(80) DEFAULT NULL, test_id int(11) DEFAULT NULL, que_des varchar(200) DEFAULT NULL, ans1 varchar(50) DEFAULT NULL, ans2 varchar(50) DEFAULT NULL, ans3 varchar(50) DEFAULT NULL, ans4 varchar(50) DEFAULT NULL,  true_ans int(11) DEFAULT NULL, your_ans int(11) DEFAULT NULL);");


//result
mysql_query("create table result(login varchar(35) not null,test_id int not null,test_date date not null,score int);");

//view of userscore
mysql_query("create view userscore as select r.login'username', t.sub'subject', t.test_name'test', r.score'score', t.total_que'total_que' ,r.test_date'test_date' from result r, test t where t.test_id=r.test_id;");

?>