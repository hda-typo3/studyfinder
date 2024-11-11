CREATE TABLE tx_studyfinder_domain_model_program (
	title varchar(255) NOT NULL DEFAULT '',
	language int(11) NOT NULL DEFAULT '0',
	nc int(11) NOT NULL DEFAULT '0',
	pre_practical_training varchar(255) NOT NULL DEFAULT '',
	additional_adminission_requirements varchar(255) NOT NULL DEFAULT '',
	consecutive smallint(1) unsigned NOT NULL DEFAULT '0',
	dual smallint(1) unsigned NOT NULL DEFAULT '0',	
	discontinued smallint(1) unsigned NOT NULL DEFAULT '0',
	startyear int(11) NOT NULL DEFAULT '0',
	location int(11) NOT NULL DEFAULT '0',
	department int(11) NOT NULL DEFAULT '0',
	comment text NOT NULL DEFAULT '',
	semester int(11) unsigned DEFAULT '0',
	category tinytext DEFAULT '0' NOT NULL,
	degree int(11) unsigned DEFAULT '0',
	targetgroup int(11) unsigned DEFAULT '0',
	programtypes tinytext DEFAULT '0' NOT NULL,

);

CREATE TABLE tx_studyfinder_domain_model_targetgroup (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE studyfinder_domain_model_semester (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_studyfinder_domain_model_category (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_studyfinder_domain_model_degree (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_studyfinder_domain_model_programtype (
	title varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_studyfinder_domain_model_category_mm(
    uid_local int(11) DEFAULT '0' NOT NULL,
    uid_foreign int(11) DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    sorting_foreign int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);
