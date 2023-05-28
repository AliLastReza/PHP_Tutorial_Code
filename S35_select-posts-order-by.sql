INSERT INTO posts (subject, content, date) VALUES ('Subject 1','Content 1','0000-00-00 00:00:00');
INSERT INTO posts (subject, content, date) VALUES ('Subject 2','Content 2','0000-00-00 00:00:00');

SELECT * FROM posts ORDER BY id ASC;
SELECT * FROM posts ORDER BY id DESC;
SELECT * FROM posts ORDER BY subject DESC;
