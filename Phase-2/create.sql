drop database playstore;
CREATE database playstore;
\c playstore;
drop table APPS;
drop table PAYMENT;
drop table GENRES;
drop table OS_SPECS;
drop table DEVELOPER;
drop table APP_SPECS;
drop table EDITORS_CH;

CREATE TABLE APPS
(

	app_id CHAR(10) NOT NULL,
	appname VARCHAR (20) NOT NULL,
	price INT DEFAULT 0,
	app_desc VARCHAR(50) NOT NULL,
	app_dev VARCHAR (20) NOT NULL,
	appgen VARCHAR(20) NOT NULL,
	cust_rating DECIMAL NOT NULL,
	appnod DECIMAL DEFAULT 0,
	PRIMARY KEY (app_id),
	UNIQUE (app_desc),
	UNIQUE (appname)
);

CREATE TABLE EDITORS_CH
(
	month VARCHAR (10) NOT NULL,
	year VARCHAR(4) NOT NULL,
	appid_ec CHAR(10) NOT NULL,
	edit_nod INT NOT NULL,
	rating DECIMAL NOT NULL,
	PRIMARY KEY (appid_ec),
	FOREIGN KEY (appid_ec) REFERENCES APPS(app_id)
);


CREATE TABLE DEVELOPER
(
	dev_id VARCHAR(15) NOT NULL,
	dev_name VARCHAR (20) NOT NULL,	
	avg_rate DECIMAL NOT NULL,
	devnod_in_M DECIMAL NOT NULL,
	no_of_apps INT NOT NULL,
	PRIMARY KEY (dev_name),
	UNIQUE (dev_id)
);

CREATE TABLE genres
(
	g_name VARCHAR (15) NOT NULL,
	total_no INT NOT NULL,
	g_av_rating DECIMAL NOT NULL,
	g_nod_in_M DECIMAL NOT NULL,
	PRIMARY KEY (g_name)

);
CREATE TABLE OS_SPECS
(
	appid_os CHAR(10) NOT NULL,
	ver_req DECIMAL NOT NULL,
	processor VARCHAR(20) NOT NULL,
	os_type VARCHAR(20) NOT NULL,
	PRIMARY KEY (appid_os),
	FOREIGN KEY (appid_os) REFERENCES APPS(app_id)
);

CREATE TABLE APP_SPECS
(
	appid_spec CHAR(10) NOT NULL,
	space_req_in_MB INT NOT NULL,
	in_app_purchases VARCHAR (3) NOT NULL,
	copyright VARCHAR (20) NOT NULL,
	languages INT NOT NULL,
	PRIMARY KEY (appid_spec),
	FOREIGN KEY (appid_spec) REFERENCES APPS(app_id)

);

CREATE TABLE payment
(
	app_pay CHAR(10) NOT NULL,
	Descriptioncard_type VARCHAR(20),
	card_no VARCHAR(20),
	cvv INT ,
	wallet_name VARCHAR(15),
	PRIMARY KEY (app_pay),
	FOREIGN KEY (app_pay) REFERENCES APPS(app_id)
);


