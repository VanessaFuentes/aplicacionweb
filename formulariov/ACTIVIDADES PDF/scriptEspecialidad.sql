DROP DATABASE IF EXISTS ESCUELA;
CREATE DATABASE ESCUELA;
USE ESCUELA;

CRETAE TABLE AREA(
	cveArea CHAR(1)PRIMARY KEY NOT NULL,
	nomArea VARCHAR(25) NOT NULL,
	cveArea CHAR(1) NOT NULL,
	FEREIGN KEY (cveArea) REFERENCES AREA(cveArea)
		ON UPDATE CASCADE
);
INSERT INTO AREA VALUES('E','ECONOMICO-ADMINISTRATIVA');
INSERT INTO AREA VALUES('F','FISICO-MATEMATICA');
INSERT INTO AREA VALUES('Q'.'QUIMICO-BIOLOGICA');
