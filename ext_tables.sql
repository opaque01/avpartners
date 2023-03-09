CREATE TABLE tx_avpartners_domain_model_partners (
	name varchar(255) NOT NULL DEFAULT '',
	logo int(11) unsigned DEFAULT NULL,
	address varchar(255) DEFAULT NULL,
	zip varchar(255) DEFAULT NULL,
	city varchar(255) DEFAULT NULL,
	phone varchar(255) DEFAULT NULL,
	fax varchar(255) DEFAULT NULL,
	url varchar(255) NOT NULL DEFAULT '',
	email varchar(255) DEFAULT NULL,
	comment text DEFAULT NULL,
	categories text NOT NULL,
	country int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_avpartners_domain_model_countries (
	name varchar(255) NOT NULL DEFAULT '',
	isocode varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_avpartners_domain_model_categories (
	name varchar(255) NOT NULL DEFAULT ''
);
