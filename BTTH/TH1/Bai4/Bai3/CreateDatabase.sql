
CREATE DATABASE IF NOT EXISTS cse485;
USE cse485;

CREATE TABLE IF NOT EXISTS sinhvien (
    username VARCHAR(50),
    password VARCHAR(50),
    lastname VARCHAR(100),
    firstname VARCHAR(100),
    city VARCHAR(100),
    email VARCHAR(100),
    course1 VARCHAR(50)
);
