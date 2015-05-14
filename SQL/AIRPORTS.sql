CREATE TABLE AIRPORTS
(Airport_code int PRIMARY KEY,
Airport_name     VARCHAR(255) ,
Airport_status		VARCHAR(255) ,
Airport_location_id      int,
CONSTRAINT fk_airloc FOREIGN KEY (Airport_location_id)
REFERENCES LOCATIONS(Location_id) 
);

CREATE SEQUENCE seq_air_id 
