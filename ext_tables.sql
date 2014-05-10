CREATE TABLE tx_gjosjroffers_age_range (
  uid           INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid           INT(11) DEFAULT '0'             NOT NULL,

  minimum_value INT(11) UNSIGNED,
  maximum_value INT(11) UNSIGNED,

  PRIMARY KEY (uid),
  KEY parent (pid)
);

CREATE TABLE tx_gjosjroffers_attendance_fee (
  uid     INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid     INT(11) DEFAULT '0'             NOT NULL,

  amount  DECIMAL(19, 2) DEFAULT '0.00'   NOT NULL,
  comment TEXT                            NOT NULL,
#   offer   INT(11) DEFAULT '0'             NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
);

CREATE TABLE tx_gjosjroffers_attendance_range (
  uid           INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid           INT(11) DEFAULT '0'             NOT NULL,

  minimum_value INT(11) UNSIGNED,
  maximum_value INT(11) UNSIGNED,

  PRIMARY KEY (uid),
  KEY parent (pid)
);

CREATE TABLE tx_gjosjroffers_category (
  uid              INT(11) UNSIGNED                 NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'              NOT NULL,

  description      TEXT                             NOT NULL,
  is_internal      TINYINT(1) UNSIGNED DEFAULT '0'  NOT NULL,
  title            VARCHAR(255) DEFAULT ''          NOT NULL,

  m_offer          INT(11) DEFAULT '0'              NOT NULL,
  m_status         INT(11) DEFAULT '0'              NOT NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'     NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'     NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'     NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0'  NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0'  NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'     NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'     NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'              NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'              NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'              NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''          NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'           NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'              NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'              NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'              NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'              NOT NULL,

  t3_origuid       INT(11) DEFAULT '0'              NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'              NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'              NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  fe_group         VARCHAR(100) DEFAULT '0'         NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_gjosjroffers_contact (

  uid              INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  address          TEXT                            NOT NULL,
  email            VARCHAR(80) DEFAULT ''          NOT NULL,
  fax              VARCHAR(80) DEFAULT ''          NOT NULL,
  name             VARCHAR(255) DEFAULT ''         NOT NULL,
  phone            VARCHAR(80) DEFAULT ''          NOT NULL,
  role             VARCHAR(255) DEFAULT ''         NOT NULL,
  url              VARCHAR(80) DEFAULT ''          NOT NULL,

  m_organization   INT(11)                         NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  t3_origuid       INT(11) DEFAULT '0'             NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  fe_group         VARCHAR(100) DEFAULT '0'        NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_gjosjroffers_date_range (
  uid           INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid           INT(11) DEFAULT '0'             NOT NULL,

  minimum_value INT(11) UNSIGNED,
  maximum_value INT(11) UNSIGNED,

  PRIMARY KEY (uid),
  KEY parent (pid)
);

CREATE TABLE tx_gjosjroffers_organization (

  uid              INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  address          TEXT                            NOT NULL,
  description      TEXT                            NOT NULL,
  email            VARCHAR(80) DEFAULT ''          NOT NULL,
  fax              VARCHAR(80) DEFAULT ''          NOT NULL,
  logo             VARCHAR(255) DEFAULT ''         NOT NULL,
  name             VARCHAR(255) DEFAULT ''         NOT NULL,
  phone            VARCHAR(80) DEFAULT ''          NOT NULL,
  url              VARCHAR(80) DEFAULT ''          NOT NULL,

  m_contact        INT(11)                         NULL,
  m_offer          INT(11)                         NULL,
#   m_orga_admin     INT(11)                         NULL,
#   m_status         INT(11)                         NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  t3_origuid       INT(11) DEFAULT '0'             NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  fe_group         VARCHAR(100) DEFAULT '0'        NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_gjosjroffers_offer (

  uid                INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid                INT(11) DEFAULT '0'             NOT NULL,

  dates              TEXT                            NOT NULL,
  description        TEXT                            NOT NULL,
  image              TINYBLOB                        NOT NULL,
  services           TEXT                            NOT NULL,
  teaser             TEXT                            NOT NULL,
  title              VARCHAR(255) DEFAULT ''         NOT NULL,
  venue              TEXT                            NOT NULL,

  m_age_range        INT(11) DEFAULT '0'             NOT NULL,
  m_attendance_fee   INT(11) DEFAULT '0'             NOT NULL,
  m_attendance_range INT(11) DEFAULT '0'             NOT NULL,
  m_category         INT(11) DEFAULT '0'             NOT NULL,
  m_contact          INT(11) DEFAULT '0'             NOT NULL,
  m_date_range       INT(11) DEFAULT '0'             NOT NULL,
  m_organization     INT(11) DEFAULT '0'             NOT NULL,
  m_region           INT(11) DEFAULT '0'             NOT NULL,

  tstamp             INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate             INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted            TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden             TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime            INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid          INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id           INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label        VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state        TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id      INT(11) DEFAULT '0'             NOT NULL,

  t3_origuid         INT(11) DEFAULT '0'             NOT NULL,
  sys_language_uid   INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent        INT(11) DEFAULT '0'             NOT NULL,
  l10n_diffsource    MEDIUMBLOB,

  fe_group           VARCHAR(100) DEFAULT '0'        NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_gjosjroffers_region (

  uid              INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  name             VARCHAR(255) DEFAULT ''         NOT NULL,

  m_region         INT(11) DEFAULT '0'             NOT NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  t3_origuid       INT(11) DEFAULT '0'             NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  fe_group         VARCHAR(100) DEFAULT '0'        NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_gjosjroffers_status (

  uid              INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  description      TEXT                            NOT NULL,
  title            VARCHAR(255) DEFAULT ''         NOT NULL,

  m_category       INT(11) DEFAULT '0'             NOT NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  t3_origuid       INT(11) DEFAULT '0'             NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  fe_group         VARCHAR(100) DEFAULT '0'        NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)
);

CREATE TABLE tx_gjosjroffers_mm_category_offer (
  uid             INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid             INT(11) DEFAULT '0'             NOT NULL,

  uid_local       INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  uid_foreign     INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting         INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting_foreign INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  tstamp          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted         TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,
  hidden          TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid, uid_local, uid_foreign)
);

CREATE TABLE tx_gjosjroffers_mm_category_status (
  uid             INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid             INT(11) DEFAULT '0'             NOT NULL,

  uid_local       INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  uid_foreign     INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting         INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting_foreign INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  tstamp          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted         TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,
  hidden          TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid, uid_local, uid_foreign)
);

CREATE TABLE tx_gjosjroffers_mm_contact_organization (
  uid             INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid             INT(11) DEFAULT '0'             NOT NULL,

  uid_local       INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  uid_foreign     INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting         INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting_foreign INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  tstamp          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted         TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,
  hidden          TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid, uid_local, uid_foreign)
);

CREATE TABLE tx_gjosjroffers_mm_region_offer (
  uid             INT(11) UNSIGNED                NOT NULL AUTO_INCREMENT,
  pid             INT(11) DEFAULT '0'             NOT NULL,

  uid_local       INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  uid_foreign     INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting         INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting_foreign INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  tstamp          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted         TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,
  hidden          TINYINT(3) UNSIGNED DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid, uid_local, uid_foreign)
);
