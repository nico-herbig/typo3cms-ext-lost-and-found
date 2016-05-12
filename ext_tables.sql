#
# Table structure for table 'tx_lostandfound_domain_model_category'
#
CREATE TABLE tx_lostandfound_domain_model_category (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    icon varchar(20) DEFAULT '' NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_lostandfound_domain_model_find'
#
CREATE TABLE tx_lostandfound_domain_model_find (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    number varchar(20) DEFAULT '' NOT NULL,
    name varchar(255) DEFAULT '' NOT NULL,
    date_of_finding int(11) DEFAULT '0' NOT NULL,
    place_of_finding varchar(255) DEFAULT '' NOT NULL,
    category int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

# PROTECTED REGION ID(ext_tables.sql.own.code.eee_1045467100313_135436_1) ENABLED START
# PROTECTED REGION END
