set names 'utf8';
create database bulgaria character set utf8 collate utf8_general_ci;
grant all on bulgaria.* to 'web_user'@'%' identified by 'Password1';
use bulgaria;
create table citizens (id int primary key auto_increment, citizen_type varchar(50), population int);
INSERT INTO cities (citizen_type, population) VALUES ('Мъже', 2 416 899);
INSERT INTO cities (citizen_type, population) VALUES ('Жени', 2 626 287);
