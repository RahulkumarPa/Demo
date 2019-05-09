/*
Name:	Rahulkumar Patel
File:	termtest3_foods.sql
Date:	07 Aug 2018
Course:	WEBD2201
*/
-- DROP'ping tables and removing any existing data
DROP TABLE IF EXISTS favourite_foods;

-- CREATE the table, 
CREATE TABLE favourite_foods(
	name VARCHAR(100) PRIMARY KEY,
	food_group VARCHAR(50)NOT NULL,
	estimated_calories INTEGER NOT NULL,
	description VARCHAR(1000) NOT NULL
);
ALTER TABLE favourite_foods OWNER TO patelr;


INSERT INTO favourite_foods(name,food_group,estimated_calories,description) VALUES(
    'vadapau',
	'Maharasthra',
	'450',
	'It very spice and always eat with the bread.'
	);

INSERT INTO favourite_foods(name,food_group,estimated_calories,description) VALUES(
    'Kadhi-Khichdy',
    'Indian',
    '500',
    'It is avery healty food and light food it contain many vegitaableles and solt with a rise.'	);

INSERT INTO favourite_foods(name,food_group,estimated_calories,description) VALUES(
    'Dal-bati',
    'Rjasthani,Indian',
    '1200',
    'It is spice food and eat with some sweets so it make a perfect combination of test.'
	);	
