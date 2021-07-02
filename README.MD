
# A network traffic monitoring tool using the Packet Capture library
### General Info
------------
The main part of this Assignment is to develop an app,using Docker.
Containers were used for:
- Apache Server (php:7.4.0-apache)
- MySQL (mysql:8.0)
- pgAdmin(phpmyadmin/phpmyadmin)

  
INSTALLATION
------------
1. Compose yml and go to  http://localhost:8000/tuc/


EXTRA INFOS
------------
In the YML file, the command DEPENDS_ON is used in order to
define which container will start first. (Database starts first,second Apache server and
finally pgAdmin). It is noted that in order to SQL8 to work i used the command:
Command: - Default-authentication-plugin = mysql_native_password
Also i used the command, Restart: Always, in case that a box
fails to "rebuild" automatically. Still in terms of Volumes
a folder is used in the root folder of the project (Volumesimple)
that is connected to Container's /var/lib/mysql so,
we have access to the database files, as well as for not being dropped
every time. For the database container DEFAULT PORT (3306) is being used
Pgadmin also listening to the same port so it can has access to the db. 
One Volume is being used to read Apache web application files
(In our system the folder is php/ .Container's folder is the default
folder,that Apache reads.(/var/www/html/) For the Network
, default (Bridge) is used, as our containers are separate
and we want to connect to each other.In order not to insert the db
everytime the application is running manually,i used the command:
./dump.sql:/docker-entrypoint-initdb.d/dump.sql in order to
initialized the base named Dump.sql the first time. In particular
Container will run the files on /docker-entrypoint-initdb.d/ 
so it will import a ready-to-use database.

USEFULL PASSWORDS:
------------
- DataBase: root 123456
- Teacher's account admin admin

USEFULL TIPS
------------
* Note:the first time, you have to wait a few seconds
until the db is initialized. Although the command depends_on is used
apache is ready before the db, because the command
refers to when it will start and not when it will be ready. This
short wait problem can be solved using a script
(wait-for-it.sh)
In case of inability to use the attached db, the
code to create 2 tables and import some
data is :   
```CREATE TABLE `Teachers` (`ID` varchar(10) DEFAULT NULL,`NAME` varchar(10) DEFAULT NULL,`SURNAME` varchar(10) DEFAULT
NULL,`USERNAME` varchar(10) DEFAULT NULL,`PASSWORD` varchar(10) DEFAULT NULL,`EMAIL` varchar(10) DEFAULT NULL)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `Teachers` VALUES ('1',Jim,'theplayer','admin','admin','admin@fake.com');
CREATE TABLE `Students` (
`ID` int(11) NOT NULL AUTO_INCREMENT,
`NAME` varchar(20) DEFAULT NULL,
`SURNAME` varchar(20) DEFAULT NULL,
`FATHERNAME` varchar(10) DEFAULT NULL,
`MOBILENUMBER` varchar(10) DEFAULT NULL,
`BIRTHDAY` date DEFAULT NULL,
`GRADE` decimal(4,2) DEFAULT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `Students` VALUES ('1','Antonios','Eratosthenis','Bill','6974365745','2019-12-03','7.00');
INSERT INTO `Students` VALUES ('2','Mpakos','Apostolou','John','6974333745','2000-02-03','8.00');
INSERT INTO `Students` VALUES ('3','Stavros','Apostolou','Manos','6976543218','2001-07-09','9.00'); ```<br />