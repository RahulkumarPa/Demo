/*
Name:	Rahulkumar Patel
File:	lab9_users.sql
Date:	22 July 2018
Course:	WEBD2201
*/
-- To DROP the table and clear out any existing data
DROP TABLE IF EXISTS users;

-- To CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE users(
	id VARCHAR(20) PRIMARY KEY,
	password VARCHAR(15) NOT NULL,
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email_address VARCHAR(255) NOT NULL,
	enrol_date DATE NOT NULL,
	last_access DATE NOT  NULL
);
ALTER TABLE users OWNER TO patelr;
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jdoe',
	'testpass',
	'John',
	'Doe',
	'jdoe@durhamcollege.ca',
	'2018-01-01',
	'2018-02-01'
	);
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'rahulp',
	'admin',
	'Rahyl',
	'Patel',
	'patelrahul.kumar@2durhamcollege.ca',
	'2018-01-10',
	'2018-02-01'
	);
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jpatel',
	'admin',
	'jay',
	'Patel',
	'jpatel@durhamcollege.ca',
	'2017-11-23',
	'2018-07-01'
	);
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'dchoksi',
	'admin',
	'Dhansukh',
	'Choksi',
	'dhansukhchoksi@durhamcollege.ca',
	'2010-12-05',
	'2018-02-01'
	);

	