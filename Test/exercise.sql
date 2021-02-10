use table1;

CREATE TABLE user(
id int(9) NOT NULL auto_increment,
prefix varchar (5) NOT NULL,
first name varchar(100) NOT NULL,
last name varchar(100) NOT NULL,
email varchar(100) NOT NULL,
mobile int(11) NOT NULL,
password varchar(100) NOT NULL,
information varchar(100) NOT NULL,
Last Login At varchar(100) NOT NULL,
Created At varchar(100) NOT NULL,
Updated At varchar(100) NOT NULL,
PRIMARY KEY (id)
)

CREATE TABLE blog_post(
pid int(9) NOT NULL auto_increment,
user_id int(9) NOT NULL,
title varchar (100) NOT NULL,
url varchar(100) NOT NULL,
category varchar(50) NOT NULL,
content varchar(1000) NOT NULL,
published at date(10) NOT NULL,
Created At date(10) NOT NULL,
Updated At date(10) NOT NULL,
PRIMARY KEY (id)
CONSTRAINT FK_blog_post_1
FOREIGN KEY (user_id) REFERENCES user(id)
)

CREATE TABLE category(
cid int(9) NOT NULL auto_increment,
parent category id int(9) NOT NULL,
category varchar(50) NOT NULL,
title varchar (100) NOT NULL,
meta title varchar (100) NOT NULL,
url varchar(100) NOT NULL,
content varchar(1000) NOT NULL,
image BLOB NOT NULL,
Created At date(10) NOT NULL,
Updated At date(10) NOT NULL,
PRIMARY KEY (id)
)