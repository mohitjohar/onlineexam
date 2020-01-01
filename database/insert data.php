<?php
//Server connection
$conn=mysql_connect("localhost","id12020741_mohit","mohit@123") or die("Server not connected");
mysql_select_db("id12020741_exam",$conn);

$date = date("Y-m-d");

//subject
mysql_query("insert into subject(sub_id,sub,user,date) values(1,'Java','Aman@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(2,'gk','Sanjeev@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(3,'maths','Meenu@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(4,'php','Rohit@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(5,'RDBMS','Richa@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(6,'MP','Meenu@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(7,'CN','Meenu@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(8,'CC','Rohit@123','$date');") or die("error".mysql_error());

mysql_query("insert into subject(sub_id,sub,user,date) values(9,'DBMS','Rohit@123','$date');") or die("error".mysql_error());


//test
mysql_query("insert into test(test_id,sub,test_name,total_que) values(1,'Java','Section 1',10);");

mysql_query("insert into test(test_id,sub,test_name,total_que) values(2,'Java','Section 2',10);");

mysql_query("insert into test(test_id,sub,test_name,total_que) values(3,'Java','Section 3',10);");

mysql_query("insert into test(test_id,sub,test_name,total_que) values(4,'gk','Section 1',10);");

mysql_query("insert into test(test_id,sub,test_name,total_que) values(5,'maths','Section 1',10);");

mysql_query("insert into test(test_id,sub,test_name,total_que) values(5,'maths','Section 1',10);");

mysql_query("insert into test(test_id,sub,test_name,total_que) values(6,'php','Section 1',10);");

//questions
mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(1, 1, 'Java', 'What is Java', 'Java is Object Oriented', 'Java is Procedural language', 'A and B', 'None of above', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(2, 1, 'Java', 'Java use', 'Top Down Approach', 'Bottom up Approach', 'A and B', 'None of above', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(3, 1, 'Java', 'Java is Insecure', 'True', 'False', 'A and B', 'None of above', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(4, 1, 'Java', 'how to declare array in java', 'a[]', 'int a[] = new int[4]', 'int a[4] = new a[]', 'None of above', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(5, 1, 'Java', 'Object is:', 'Any entity that have state behavior', 'instance of class', 'A and B', 'None of above', 3, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(6, 1, 'Java', 'Polymorphism', 'refers to ability of one thing to take many forms', 'refers to multiple thing to take single forms', 'A and B', 'None of above', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(7, 1, 'Java', 'Polymorphism have :', 'Static Binding', 'Dynammic Binding', 'a and b', 'None of above', 3, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(8, 1, 'Java', 'A java class is Example of', 'encapsulation', 'Abstraction', 'A and b', 'None of above', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(9, 1, 'Java', 'which class aquire all the properties of Base class', 'derived class', 'child class', 'A and b', 'None of above', 3, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(10, 1, 'Java', 'which provides code reusability', 'inheritance', 'polymorphism', 'Abstraction', 'None of above', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(11, 4, 'gk', 'Grand central Terminal Park avenue new york is the worlds', 'largest railway station', 'highest railway station', 'logest railway station', 'none of the above', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(12, 4, 'gk', 'Entomology is the science that studies ', 'behaviour of humun being', 'insects', 'the origin and history of technical and scientific terms', 'the formation of rocks', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(13, 4, 'gk', 'garampani sanctuary is located at ', 'junagarh gujrat', 'diphu assam', 'kohima', 'gantok', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(14, 4, 'gk', 'for which of the following discipling is noble prize awarded', 'physics and chemistry', 'physicology or medicine', 'literature peace and ecomomics ', 'all of the above', 4, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(15, 4, 'gk', 'hitler party which come into power in 1933 is known as', 'labour party', 'nazi party', 'ku-klux-klan', 'democratic party', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(16, 4, 'gk', 'ffc stands for', 'foreign finance corporation', 'film -finance corporation', 'federation of football council', 'none of the above', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(17, 4, 'gk', 'fartest shorthand writer was', 'Dr .G.D BIST', 'J.R.D TATA', 'J.M TAGORE', 'KHUDADA KHAN', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(18, 4, 'gk', 'EPsom(england)is the place associated with ', 'horse racing', 'polo', 'shooting', 'snooker', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(19, 4, 'gk', 'golf player viyay singh belongs to which country', 'USA', 'FIJI', 'INDIA', 'UK', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(20, 4, 'gk', 'first algorithm was took place in', '1839', '1843', '1833', '1848', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(21, 5, 'maths', 'the average f first 50 natural numbers is', '25.30', '25.5', '25', '12.25', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(22, 5, 'maths', 'the number of 3 digit numbers divisible by 6 is', '149', '166', '150', '151', 3, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(23, 5, 'maths', 'what is 1004 divided by 2', '52', '502', '520', '5002', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(24, 5, 'maths', '106*106-94*94', '2004', '2400', '1904', '1906', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(25, 5, 'maths', 'solve 8^3*8^2*8^-5 is', '1', '0', '8', 'none of this', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(26, 5, 'maths', 'the simplest form of 1.5:2.5 is', '6:10', '15:25', '0.75:125', '3:5', 4, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(27, 5, 'maths', '19+.......=42', '23', '61', '0', '42', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(28, 5, 'maths', 'what is the greatest two digit number', '10', '90', '11', '99', 4, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(29, 5, 'maths', 'how much is 90-19', '89', '71', '109', 'none of these', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(30, 5, 'maths', '20 is divisible by', '1', '3', '7', 'none of these', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(31, 6, 'php', 'php stands for', 'personal sub page', 'hypertext preprocessor', 'pretext hypertext processor', 'preprocessor home page', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(32, 6, 'php', 'who is father of php', 'rasmus lerdorf', 'willam makepiece', 'drek kolkevi', 'list barely', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(33, 6, 'php', 'php files have a default file extension of', 'html', 'xml', 'php', '.ph', 3, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(34, 6, 'php', 'what is the symbol of newline character', '\r', '\n', '/n', '/r', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(35, 6, 'php', 'we can use ... to comment a single line', '//', '#', '/**/', 'none of these', 4, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(36, 6, 'php', 'php introduced version is', 'php4', 'php5', 'php5.3', 'php6', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(37, 6, 'php', 'php output statement', 'echo', 'print', 'count', 'cin', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(38, 6, 'php', '# is used for', 'comment', 'input', 'output', 'none of these', 1, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(39, 6, 'php', '$ is used for ', 'constant', 'variable', 'array', 'pointer', 2, '$date');");

mysql_query("insert into addque(que_id, test_id, sub, que_des, a1, a2, a3, a4, true_ans, date) values(40, 6, 'php', 'how to declare array', 'array()', 'a[]', 'a and b', 'none of these', 1, '$date');");