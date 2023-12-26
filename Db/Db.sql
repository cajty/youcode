CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(30),
    description VARCHAR (255)
)engine = innodb;
CREATE TABLE class (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(30),
    date_de_creation TIMESTAMP DEFAULT NOW(),
    promation VARCHAR (255)
)engine = innodb;
CREATE TABLE utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    paword VARCHAR (30),
    email VARCHAR (50),
    role_id INT,
    Foreign Key (role_id) REFERENCES roles (id),
    class_id INT,
    Foreign Key (class_id) REFERENCES class (id),
    phone VARCHAR(30),
    cin VARCHAR (30)
)engine = innodb;

