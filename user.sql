
CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;


CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insert the first user
INSERT INTO users (username, password) VALUES ('user1', 'password1');

-- Insert the second user
INSERT INTO users (username, password) VALUES ('user2', 'password2');
