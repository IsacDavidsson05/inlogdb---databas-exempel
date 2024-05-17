--CREATE TABLE emp(empid INTEGER NOT NULL PRIMARY KEY, empname TEXT NOT NULL, email NOT NULL);

--INSERT INTO emp(empid,empname,email)
--VALUES (1, "Sam","test1@test.com");

--SELECT * FROM emp; 
--CREATE TABLE user(userid INTEGER PRIMARY KEY AUTOINCREMENT, Username VARCHAR(200), Password VARCHAR(200), isAdmin BOOLEAN DEFAULT FALSE, isActive BOOLEAN DEFAULT TRUE);

SELECT * FROM user;

--INSERT INTO user(Username, Password, isAdmin, isActive)
--VALUES("Isac05", "Isac05", True, True);
--INSERT INTO user(Username, Password, isAdmin, isActive)
--VALUES("Johan", "Johan", False, True);