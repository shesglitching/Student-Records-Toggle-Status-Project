

CREATE DATABASE IF NOT EXISTS student_records;
USE student_records;

CREATE TABLE IF NOT EXISTS records (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    age INT(3) NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO records (name, age, status) VALUES
('Ali Ahmed', 21, 0),
('Sara Yousef', 23, 1);
