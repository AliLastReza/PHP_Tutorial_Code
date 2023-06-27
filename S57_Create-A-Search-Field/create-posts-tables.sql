CREATE TABLE posts (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title varchar(256) NOT NULL,
    content text NOT NULL,
    author varchar(256) NOT NULL,
    createdAt datetime NOT NULL
);