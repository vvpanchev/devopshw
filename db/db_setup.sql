set names 'utf8';
create database bulgaria character set utf8 collate utf8_general_ci;
GRANT ALL PRIVILEGES on bulgaria.* to 'web_user'@'%' IDENTIFIED BY 'Password1';
FLUSH PRIVILEGES;
use bulgaria;
create table citizens (id int primary key auto_increment, citizen_type varchar(50), population int);
INSERT INTO citizens (citizen_type, population) VALUES ('Мъже', '2416899');
INSERT INTO citizens (citizen_type, population) VALUES ('Жени', '2626287');
