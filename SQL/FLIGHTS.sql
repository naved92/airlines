CREATE TABLE FLIGHTS(
Flight_code int PRIMARY KEY,
Source_airport_id int ,
Destination_airport_id int,
Depart_time TIMESTAMP ,
Arrival_time TIMESTAMP,
Distance INT,
Constraint fk_src_air FOREIGN KEY(Source_airport_id) 
REFERENCES AIRPORTS(Airport_code),
Constraint fk_dest_air FOREIGN KEY (Destination_airport_id)
REFERENCES AIRPORTS(Airport_code)
);

CREATE SEQUENCE seq_flight_code;
