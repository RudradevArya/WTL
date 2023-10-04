SHOW DATABASES;
CREATE DATABASE WTL;
USE WTL;


CREATE TABLE form(
guy_name VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL
);

DESC form;

SELECT * FROM form;

-- INSERT INTO form values ("guy_name", "email");