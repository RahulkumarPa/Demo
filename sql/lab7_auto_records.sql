/*
Name:   Rahulkumar Patel
File:   lab7_auto_records.sql
Date:   13-July-2018
Course: WEBD2201 
*/

--Droping table and clearing any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, note that id has to be unique, and you must have a name
 CREATE TABLE automobiles  (
    id INTEGER PRIMARY KEY,
	make VARCHAR(15) NOT  NULL,
	model VARCHAR(20) NOT NULL,
	year INTEGER NOT NULL,
	owner VARCHAR(100) NOT NULL,
	msrp NUMERIC(10,2) NOT NULL,
	purchase_date DATE NOT NULL
   );
   
ALTER TABLE automobiles OWNER TO patelr;

-- Inserting data in to the automobiles TABLE
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	1,
	'TOYOTA',
	'FORTUNER',
	2010,
	'Janak Raiyanee',
	36450.99,
	'2010-12-08'
	);
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	2,
	'MAHINDRA',
	'SCORPIOs11',
	2017,
	'Ghanshyam Patel',
	30000.99,
	'2018-06-15'
	);
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	3,
	'FORD',
	'ECOSPORT',
	2018,
	'Naresh Patel',
	25000.99,
	'2018-08-15'
	);
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	4,
	'TOYOTA',
	'INOVA',
	2011,
	'Jay Patel',
	55000.99,
	'2010-01-31'
	);
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	5,
	'AUDI',
	'AUDIa3',
	2017,
	'Jash Akoliya',
	60000.99,
	'2017-11-26'
	);


UPDATE automobiles SET owner = 'Rahul Patel' WHERE model = 'FORTUNER';



DELETE FROM automobiles WHERE model = 'INOVA';	