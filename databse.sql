create database w1673700_Futurity; //creating the database 
use w1673700_Futurity; //using the created database 
  
create table w1673700_Company   //creating the company table
(w1673700_compCode INT(12) NOT NULL PRIMARY KEY,
 w1673700_compName VARCHAR(200) NOT NULL,
 w1673700_compDescrip VARCHAR(200) NOT NULL)
 ENGINE = InnoDB;

create table w1673700_Employee //creating the employee table
 (w1673700_empId INT(12) NOT NULL PRIMARY KEY,
  w1673700_empFullName VARCHAR(200) NOT NULL,
  w1673700_empPosition VARCHAR(50) NOT NULL,
  w1673700_empEmail VARCHAR(80) NOT NULL,
  w1673700_compCode INT(12) NOT NULL,
CONSTRAINT W1673700_FKCK1
FOREIGN KEY (w1673700_compCode)
REFERENCES w1673700_Company(w1673700_compCode))
ENGINE = InnoDB;

INSERT INTO w1673700_Company  //inserting data in to table 
VALUES (10, 'Orinway Lesiure', 'Leisure Providing Company'),
	   (20, 'Walkers Piling', 'Piling Company'),
       (30, 'Sysco Labs', 'Innovation Company'),
       (40, 'Jetwing Colombo Seven', 'Hospitality Providing Company');
