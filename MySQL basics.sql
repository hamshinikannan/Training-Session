SELECT * FROM pets//select all columns

SELECT * FROM pets WHERE Type= 'Parrot'; //select particular row
SELECT * FROM pets WHERE Type= 'dog' AND Gender = 'f'; //select on particular condition
SELECT Name FROM pets; //select particular column

SELECT Owner FROM pets; //gives all owners with repetition
SELECT DISTINCT Owner FROM pets; // gives all owner without repetition

SELECT Name, Gender FROM pets ORDER BY Name; //arranged by name
SELECT Name FROM pets ORDER BY Name DESC;//arrange in descending order
SELECT Name, Owner FROM pets ORDER BY Name,Owner DESC //Name - asc, Owner - desc

SELECT name, birth, MONTH(birth) FROM pet //extract birth month
SELECT name, birth FROM pet WHERE MONTH(birth) = 5; //extract particular month
SELECT '2018-10-31' + INTERVAL 1 DAY; //giving intervals to know the date

SELECT * FROM pets WHERE name LIKE 'r%';//pattern matching - match name starting with r
SELECT * FROM pets WHERE name LIKE '%ie';//pattern matching - match name ending with ie
SELECT * FROM pets WHERE name LIKE '%s%'; //containing s

SELECT * FROM pet WHERE REGEXP_LIKE(name, '^.....$');//match 5 characters
SELECT * FROM pet WHERE REGEXP_LIKE(name, '^.{5}$');//another way of matching 5 char

SELECT COUNT(*) FROM pets;//count the number of pets
SELECT Owner, COUNT(*) FROM pets GROUP BY Owner;//count the no of pets each owner has

UPDATE pets SET birth = '1989-08-31' WHERE name = 'Bowser'; //update the record without reloading the table

CREATE INDEX idxname ON studentinfo(Firstname,Lastname); //creating index

CREATE TRIGGER marksinfo  BEFORE INSERT  		// trigger
ON studentinfo FOR EACH ROW  
BEGIN  
  IF NEW.Marks < 200 THEN SET NEW.Marks = 0;  
END IF;  
END;   

CREATE VIEW reg_number AS SELECT Regno FROM studentinfo WHERE Regno>5; //view 