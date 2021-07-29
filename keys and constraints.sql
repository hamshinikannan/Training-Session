//Foreign key- permits cross referencing related data across tables
//Persons table
CREATE TABLE Persons (  
    Person_ID int NOT NULL PRIMARY KEY,   
    Name varchar(45) NOT NULL,   
    Age int,   
    City varchar(25)  
);

//Orders table
CREATE TABLE Orders (  
    Order_ID int NOT NULL PRIMARY KEY,  
    Order_Num int NOT NULL,  
    Person_ID int,  
    FOREIGN KEY (Person_ID) REFERENCES Persons(Person_ID)  
);


//Primary key- identify each record in a table uniquely
INSERT INTO Persons(Person_Id, Name, Age, City)   
VALUES (1,'Robert', 15, 'Florida') ,   
(2, 'Joseph', 35, 'California'),   
(3, 'Peter', 40, 'Alaska');  
  
INSERT INTO Persons(Person_Id, Name, Age, City)   
VALUES (1,'Stephen', 15, 'Florida');  //provides error-Duplicate entry for the primary key column

//unique key - maintains unique data in a column
CREATE TABLE ShirtBrands(Id INTEGER, BrandName VARCHAR(40) UNIQUE, Size VARCHAR(30))