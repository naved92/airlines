CREATE TABLE FLIGHTS_SCHEDULE
(
FLIGHTS_SCHEDULE_ID INT PRIMARY KEY,
FLIGHT INT,
FLIGHT_TIME TIMESTAMP,
CONSTRAINT FK_FS_ID FOREIGN KEY(FLIGHT) REFERENCES FLIGHTS(FLIGHT_CODE)
);


CREATE SEQUENCE SEQ_FLT_SEQ_ID;