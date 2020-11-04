CREATE DATABASE IF NOT EXISTS joshd1_test;
GRANT ALL PRIVILEGES ON joshd1_test.* TO 'joshd1_wbip'@'localhost' IDENTIFIED BY 'databasepass666' WITH GRANT OPTION;

USE joshd1_test;

DROP TABLE IF EXISTS personnel;

CREATE TABLE personnel (
  empID int NOT NULL,
  firstName varchar(64) NOT NULL,
  lastName varchar(64) NOT NULL,
  jobTitle varchar(64) NOT NULL,
  hourlyWage float NOT NULL,
  PRIMARY KEY (empID),
  UNIQUE KEY empID (empID)
 ) ENGINE='MyISAM'  DEFAULT CHARSET='latin1';

REPLACE INTO personnel (empID, firstName, lastName, jobTitle, hourlyWage) VALUES
(12345, 'Chris', 'Smith', 'Sales', 12.55),
(12347, 'Mary', 'Peters', 'Sales', 12.55),
(12348, 'Mike', 'Jones', 'Manager', 24.15),
(12353, 'Anne', 'Humphries', 'Accountant', 25.45),
(12356, 'Ann', 'Jones', 'Sales',13.75),
(12357, 'John', 'Jackson', 'Reception', 8.75),
(12358, 'John', 'King', 'Cleaner', 7.75),
(12360, 'Ken', 'Stewart', 'Accountant', 28.55),
(12361, 'Joan', 'Smith', 'Cleaner', 8.25),
(12363, 'Jesse', 'Andrews', 'Sales', 10.75);;

DROP TABLE IF EXISTS timesheet;

CREATE TABLE timesheet (
  empID int NOT NULL,
  hoursWorked int NOT NULL,
  PRIMARY KEY (empID),
  UNIQUE KEY empID (empID)
 ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

 REPLACE INTO timesheet (empID, hoursWorked) VALUES
(12345, 30),
(12347, 35),
(12348, 40),
(12353, 35),
(12356, 20),
(12357, 40),
(12358, 32),
(12360, 20),
(12361, 32),
(12363, 35);