create table posts(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content text not null,
    date datetime not null
);