/*
	
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           users.sql
    Date:           26/10/2018
    Description:    This is the sql file that stores all the information about the lisitngs

*/	

drop sequence if exists listing_id_seq;

create sequence listing_id_seq;
select setval('listing_id_seq', 10000);
ALTER SEQUENCE listing_id_seq OWNER TO group08_admin;

DROP TABLE IF EXISTS listings;

CREATE TABLE listings
(
	listing_id     int not null primary key default nextval('listing_id_seq'),
	user_id VARCHAR(20) NOT NULL,
	
	status CHAR(1) NOT NULL,
	price DECIMAL NOT NULL,
	headline VARCHAR(100) NOT NULL,
	description VARCHAR(1000) NOT NULL,
	postal_code CHAR(6) NOT NULL,
	images SMALLINT DEFAULT 0 NOT NULL,
	city INTEGER NOT NULL,
	property_options INTEGER NOT NULL,
	bedrooms INTEGER NOT NULL,
	bathrooms INTEGER NOT NULL,
	cupboards INTEGER DEFAULT 0 NOT NULL,
	sinks INTEGER DEFAULT 0 NOT NULL,
	lot_size INTEGER DEFAULT 0 NOT NULL,
	closets INTEGER DEFAULT 0 NOT NULL,
	total_rooms INTEGER DEFAULT 0 NOT NULL,
	rent_sale INTEGER DEFAULT 0 NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(user_id)

);

ALTER TABLE listings OWNER TO group08_admin;