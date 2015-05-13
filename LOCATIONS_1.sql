/*
Navicat Oracle Data Transfer
Oracle Client Version : 10.2.0.5.0

Source Server         : hello
Source Server Version : 110200
Source Host           : localhost:1521
Source Schema         : HR

Target Server Type    : ORACLE
Target Server Version : 110200
File Encoding         : 65001

Date: 2015-05-12 01:15:42
*/


-- ----------------------------
-- Table structure for "HR"."LOCATIONS"
-- ----------------------------
DROP TABLE "HR"."LOCATIONS";
CREATE TABLE "HR"."LOCATIONS" (
"LOCATION_ID" NUMBER(4) NOT NULL ,
"STREET_ADDRESS" VARCHAR2(40 BYTE) NULL ,
"POSTAL_CODE" VARCHAR2(12 BYTE) NULL ,
"CITY" VARCHAR2(30 BYTE) NOT NULL ,
"STATE_PROVINCE" VARCHAR2(25 BYTE) NULL ,
"COUNTRY_ID" CHAR(2 BYTE) NULL 
)
CREATE TABLE "LOCATIONS" (
"LOCATION_ID" NUMBER(4) NOT NULL ,
"STREET_ADDRESS" VARCHAR2(40 BYTE) NULL ,
"POSTAL_CODE" VARCHAR2(12 BYTE) NULL ,
"CITY" VARCHAR2(30 BYTE) NOT NULL ,
"STATE_PROVINCE" VARCHAR2(25 BYTE) NULL ,
"COUNTRY_ID" CHAR(2 BYTE) NULL 
);


NOLOGGING
NOCOMPRESS
NOCACHE

;
COMMENT ON TABLE "HR"."LOCATIONS" IS 'Locations table that contains specific address of a specific office,
warehouse, and/or production site of a company. Does not store addresses /
locations of customers. Contains 23 rows; references with the
departments and countries tables. ';
COMMENT ON COLUMN "HR"."LOCATIONS"."LOCATION_ID" IS 'Primary key of locations table';
COMMENT ON COLUMN "HR"."LOCATIONS"."STREET_ADDRESS" IS 'Street address of an office, warehouse, or production site of a company.
Contains building number and street name';
COMMENT ON COLUMN "HR"."LOCATIONS"."POSTAL_CODE" IS 'Postal code of the location of an office, warehouse, or production site
of a company. ';
COMMENT ON COLUMN "HR"."LOCATIONS"."CITY" IS 'A not null column that shows city where an office, warehouse, or
production site of a company is located. ';
COMMENT ON COLUMN "HR"."LOCATIONS"."STATE_PROVINCE" IS 'State or Province where an office, warehouse, or production site of a
company is located.';
COMMENT ON COLUMN "HR"."LOCATIONS"."COUNTRY_ID" IS 'Country where an office, warehouse, or production site of a company is
located. Foreign key to country_id column of the countries table.';

-- ----------------------------
-- Records of LOCATIONS
-- ----------------------------
INSERT INTO "HR"."LOCATIONS" VALUES ('1000', '1297 Via Cola di Rie', '00989', 'Roma', null, 'IT');
INSERT INTO "HR"."LOCATIONS" VALUES ('1100', '93091 Calle della Testa', '10934', 'Venice', null, 'IT');
INSERT INTO "HR"."LOCATIONS" VALUES ('1200', '2017 Shinjuku-ku', '1689', 'Tokyo', 'Tokyo Prefecture', 'JP');
INSERT INTO "HR"."LOCATIONS" VALUES ('1300', '9450 Kamiya-cho', '6823', 'Hiroshima', null, 'JP');
INSERT INTO "HR"."LOCATIONS" VALUES ('1400', '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US');
INSERT INTO "HR"."LOCATIONS" VALUES ('1500', '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US');
INSERT INTO "HR"."LOCATIONS" VALUES ('1600', '2007 Zagora St', '50090', 'South Brunswick', 'New Jersey', 'US');
INSERT INTO "HR"."LOCATIONS" VALUES ('1700', '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US');
INSERT INTO "HR"."LOCATIONS" VALUES ('1800', '147 Spadina Ave', 'M5V 2L7', 'Toronto', 'Ontario', 'CA');
INSERT INTO "HR"."LOCATIONS" VALUES ('1900', '6092 Boxwood St', 'YSW 9T2', 'Whitehorse', 'Yukon', 'CA');
INSERT INTO "HR"."LOCATIONS" VALUES ('2000', '40-5-12 Laogianggen', '190518', 'Beijing', null, 'CN');
INSERT INTO "HR"."LOCATIONS" VALUES ('2100', '1298 Vileparle (E)', '490231', 'Bombay', 'Maharashtra', 'IN');
INSERT INTO "HR"."LOCATIONS" VALUES ('2200', '12-98 Victoria Street', '2901', 'Sydney', 'New South Wales', 'AU');
INSERT INTO "HR"."LOCATIONS" VALUES ('2300', '198 Clementi North', '540198', 'Singapore', null, 'SG');
INSERT INTO "HR"."LOCATIONS" VALUES ('2400', '8204 Arthur St', null, 'London', null, 'UK');
INSERT INTO "HR"."LOCATIONS" VALUES ('2500', 'Magdalen Centre, The Oxford Science Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'UK');
INSERT INTO "HR"."LOCATIONS" VALUES ('2600', '9702 Chester Road', '09629850293', 'Stretford', 'Manchester', 'UK');
INSERT INTO "HR"."LOCATIONS" VALUES ('2700', 'Schwanthalerstr. 7031', '80925', 'Munich', 'Bavaria', 'DE');
INSERT INTO "HR"."LOCATIONS" VALUES ('2800', 'Rua Frei Caneca 1360 ', '01307-002', 'Sao Paulo', 'Sao Paulo', 'BR');
INSERT INTO "HR"."LOCATIONS" VALUES ('2900', '20 Rue des Corps-Saints', '1730', 'Geneva', 'Geneve', 'CH');
INSERT INTO "HR"."LOCATIONS" VALUES ('3000', 'Murtenstrasse 921', '3095', 'Bern', 'BE', 'CH');
INSERT INTO "HR"."LOCATIONS" VALUES ('3100', 'Pieter Breughelstraat 837', '3029SK', 'Utrecht', 'Utrecht', 'NL');
INSERT INTO "HR"."LOCATIONS" VALUES ('3200', 'Mariano Escobedo 9991', '11932', 'Mexico City', 'Distrito Federal,', 'MX');



INSERT INTO "LOCATIONS" VALUES ('1000', '1297 Via Cola di Rie', '00989', 'Roma', null, 'IT');
INSERT INTO "LOCATIONS" VALUES ('1100', '93091 Calle della Testa', '10934', 'Venice', null, 'IT');
INSERT INTO "LOCATIONS" VALUES ('1200', '2017 Shinjuku-ku', '1689', 'Tokyo', 'Tokyo Prefecture', 'JP');
INSERT INTO "LOCATIONS" VALUES ('1300', '9450 Kamiya-cho', '6823', 'Hiroshima', null, 'JP');
INSERT INTO "LOCATIONS" VALUES ('1400', '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US');
INSERT INTO "LOCATIONS" VALUES ('1500', '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US');
INSERT INTO "LOCATIONS" VALUES ('1600', '2007 Zagora St', '50090', 'South Brunswick', 'New Jersey', 'US');
INSERT INTO "LOCATIONS" VALUES ('1700', '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US');
INSERT INTO "LOCATIONS" VALUES ('1800', '147 Spadina Ave', 'M5V 2L7', 'Toronto', 'Ontario', 'CA');
INSERT INTO "LOCATIONS" VALUES ('1900', '6092 Boxwood St', 'YSW 9T2', 'Whitehorse', 'Yukon', 'CA');
INSERT INTO "LOCATIONS" VALUES ('2000', '40-5-12 Laogianggen', '190518', 'Beijing', null, 'CN');
INSERT INTO "LOCATIONS" VALUES ('2100', '1298 Vileparle (E)', '490231', 'Bombay', 'Maharashtra', 'IN');
INSERT INTO "LOCATIONS" VALUES ('2200', '12-98 Victoria Street', '2901', 'Sydney', 'New South Wales', 'AU');
INSERT INTO "LOCATIONS" VALUES ('2300', '198 Clementi North', '540198', 'Singapore', null, 'SG');
INSERT INTO "LOCATIONS" VALUES ('2400', '8204 Arthur St', null, 'London', null, 'UK');
INSERT INTO "LOCATIONS" VALUES ('2500', 'Magdalen Centre, The Oxford Science Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'UK');
INSERT INTO "LOCATIONS" VALUES ('2600', '9702 Chester Road', '09629850293', 'Stretford', 'Manchester', 'UK');
INSERT INTO "LOCATIONS" VALUES ('2700', 'Schwanthalerstr. 7031', '80925', 'Munich', 'Bavaria', 'DE');
INSERT INTO "LOCATIONS" VALUES ('2800', 'Rua Frei Caneca 1360 ', '01307-002', 'Sao Paulo', 'Sao Paulo', 'BR');
INSERT INTO "LOCATIONS" VALUES ('2900', '20 Rue des Corps-Saints', '1730', 'Geneva', 'Geneve', 'CH');
INSERT INTO "LOCATIONS" VALUES ('3000', 'Murtenstrasse 921', '3095', 'Bern', 'BE', 'CH');
INSERT INTO "LOCATIONS" VALUES ('3100', 'Pieter Breughelstraat 837', '3029SK', 'Utrecht', 'Utrecht', 'NL');
INSERT INTO "LOCATIONS" VALUES ('3200', 'Mariano Escobedo 9991', '11932', 'Mexico City', 'Distrito Federal,', 'MX');

-- ----------------------------
-- Indexes structure for table LOCATIONS
-- ----------------------------
CREATE INDEX "HR"."LOC_CITY_IX"
ON "HR"."LOCATIONS" ("CITY" ASC)
NOLOGGING
VISIBLE;
CREATE INDEX "HR"."LOC_COUNTRY_IX"
ON "HR"."LOCATIONS" ("COUNTRY_ID" ASC)
NOLOGGING
VISIBLE;
CREATE INDEX "HR"."LOC_STATE_PROVINCE_IX"
ON "HR"."LOCATIONS" ("STATE_PROVINCE" ASC)
NOLOGGING
VISIBLE;

-- ----------------------------
-- Checks structure for table "HR"."LOCATIONS"
-- ----------------------------
ALTER TABLE "HR"."LOCATIONS" ADD CHECK ("CITY" IS NOT NULL);

-- ----------------------------
-- Primary Key structure for table "HR"."LOCATIONS"
-- ----------------------------
ALTER TABLE "HR"."LOCATIONS" ADD PRIMARY KEY ("LOCATION_ID");

-- ----------------------------
-- Foreign Key structure for table "HR"."LOCATIONS"
-- ----------------------------
ALTER TABLE "HR"."LOCATIONS" ADD FOREIGN KEY ("COUNTRY_ID") REFERENCES "HR"."COUNTRIES" ("COUNTRY_ID");
