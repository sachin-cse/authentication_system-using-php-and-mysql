-- for login purpose only
CREATE TABLE IF NOT EXISTS `login` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password_hash CHAR(60) NOT NULL,
    last_login_time DATETIME
);

-- for signup purpose only
CREATE TABLE IF NOT EXISTS `signup` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash CHAR(60) NOT NULL,
    confirm_password CHAR(60) NOT NULL,
    signup_time DATETIME
);
