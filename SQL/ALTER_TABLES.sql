ALTER TABLE LOCATIONS ADD  LATITUDE DOUBLE PRECISION;
ALTER TABLE LOCATIONS ADD  LONGITUDE DOUBLE PRECISION;
ALTER TABLE CUSTOMERS ADD  EMAIL VARCHAR(255);
ALTER TABLE CUSTOMERS ADD  PASS VARCHAR(255);
ALTER TABLE CUSTOMERS ADD  TELEPHONE_NUM VARCHAR(255);
ALTER TABLE AIRPLANES ADD 	AIRPLANE_TAIL_NUMBER VARCHAR2(11);