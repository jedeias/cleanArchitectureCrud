DROP DATABASE IF EXISTS CleanArchitecture;

CREATE DATABASE CleanArchitecture CHARACTER SET utf8;

USE CleanArchitecture;

CREATE TABLE accessLevel (
    pkAccessLevel INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    level VARCHAR(50) UNIQUE KEY NOT NULL
) CHARACTER SET utf8;


CREATE TABLE people (
    pkPeople INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(80) UNIQUE KEY NOT NULL,
    name VARCHAR(100) NOT NULL, 
    password VARCHAR(12) NOT NULL,
    sex ENUM('M','F'),
    fkAccessLevel INT NOT NULL,
    FOREIGN KEY (fkAccessLevel) REFERENCES accessLevel(pkAccessLevel)
) CHARACTER SET utf8;


CREATE TABLE notes (
    pkNotes INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkPeople INT NOT NULL,
    notes TEXT NOT NULL,
    date DATETIME,
    FOREIGN KEY (fkPeople) REFERENCES people(pkPeople)
) CHARACTER SET utf8;


DELIMITER $$
CREATE PROCEDURE insertAccessLevel(
    IN _level VARCHAR(50)
)
BEGIN

    START TRANSACTION;

    INSERT INTO accessLevel (level)
    VALUES (_level);

    COMMIT;
        ROLLBACK;
END $$
DELIMITER ;

CALL insertAccessLevel("READ");
CALL insertAccessLevel("ADMIN");

SELECT * FROM accessLevel;

DELIMITER $$
CREATE PROCEDURE insertPerson(
    IN _name VARCHAR(100),
    IN _email VARCHAR(80),
    IN _password VARCHAR(12),
    IN _sex VARCHAR(1),
    IN _fkAccessLevel INT
)
BEGIN
    INSERT INTO people (name, email, password, sex, fkAccessLevel) 
    VALUES (_name, _email, _password, _sex, _fkAccessLevel);

    COMMIT;
        ROLLBACK;
END $$
DELIMITER ;


DELIMITER $$

CREATE PROCEDURE login(
    IN _email VARCHAR(80),
    IN _password VARCHAR(12)
)
BEGIN
    SELECT * FROM people WHERE email = _email AND password = _password;

    COMMIT;
        ROLLBACK;

END $$

DELIMITER ;

CALL login("test@test.com", "password");


CALL insertPerson("testson", "test@test.com", "password", "M", 2);


DELIMITER $$

CREATE PROCEDURE selectPeople()

BEGIN

    SELECT * FROM people;

    COMMIT;
        ROLLBACK;

END $$

DELIMITER ;

CALL selectPeople();


SELECT * FROM people;
SELECT * FROM accessLevel;
SELECT * FROM notes;



DELIMITER $$

CREATE PROCEDURE deletePerson(

    IN _ID int

)

BEGIN 

    DELETE FROM notes WHERE fkPeople = _ID;
    DELETE FROM people WHERE pkPeople = _ID;


    COMMIT;

        ROLLBACK;

END $$

DELIMITER;

DELIMITER $$

CREATE PROCEDURE updatePerson(
    IN _pkPeople INT,
    IN _email VARCHAR(80),
    IN _name VARCHAR(100),
    IN _password VARCHAR(12),
    IN _sex VARCHAR(1), 
    IN _fkAccessLevel INT
)
BEGIN
    UPDATE people 
    SET email = _email, 
        name = _name, 
        password = _password, 
        sex = _sex, 
        fkAccessLevel = _fkAccessLevel 
    WHERE pkPeople = _pkPeople;

    COMMIT;

        ROLLBACK;

END $$

DELIMITER ;

CALL updatePerson ("1","test@test.com", "testPerson", "password", "F", "2");

DELIMITER $$

CREATE PROCEDURE selectByEmail(
    IN _email VARCHAR(80)
)
BEGIN
    SELECT * FROM people WHERE email = _email;

    COMMIT;

        ROLLBACK;

END $$

DELIMITER ;


DELIMITER $$

CREATE PROCEDURE getById(

    IN _pkPeople INT
)
BEGIN

    SELECT * FROM people WHERE pkPeople = _pkPeople;

    COMMIT;
        ROLLBACK;

END $$

DELIMITER ;

