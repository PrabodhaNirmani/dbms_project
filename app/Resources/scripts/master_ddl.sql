DROP 	DATABASE IF EXISTS `ministry_of_education`;

CREATE DATABASE ministry_of_education;

USE ministry_of_education; 

CREATE TABLE applicant 
  ( 
     applicant_id INT NOT NULL auto_increment PRIMARY KEY, 
     first_name   VARCHAR(255) NOT NULL, 
     last_name    VARCHAR(255), 
     sex          VARCHAR(6) NOT NULL, 
     medium       VARCHAR(7) NOT NULL, 
     religion     VARCHAR(12) NOT NULL, 
     birth_day    DATE NOT NULL, 
     age          DATE NOT NULL 
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE applicant_guardian
  (
     applicant_id          INT NOT NULL,
     guardian_id           INT NOT NULL PRIMARY KEY,
     guardian_type         VARCHAR(11) NOT NULL,
     first_name            VARCHAR(255) NOT NULL,
     last_name             VARCHAR(255),
     national_id_no        VARCHAR(10) NOT NULL UNIQUE,
     nationality_srilankan BOOLEAN NOT NULL,
     religion              VARCHAR(11),
     address_no            VARCHAR(8) NOT NULL,
     address_street        VARCHAR(50) NOT NULL,
     address_city          VARCHAR(20) NOT NULL,
     tele_no               INT(10),
     div_sec_area          VARCHAR(50) NOT NULL,
     grama_nil_res_no      INT(20) NOT NULL,
     FOREIGN KEY(applicant_id) REFERENCES applicant(applicant_id) ON DELETE
     CASCADE
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE school
  (
     school_id      INT NOT NULL auto_increment PRIMARY KEY,
     school_name    VARCHAR(50) NOT NULL,
     street         VARCHAR(50),
     city           VARCHAR(20) NOT NULL,
     max_no_student INT NOT NULL
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE applicant_priority
  (
     applicant_id       INT NOT NULL,
     school_id          INT NOT NULL,
     priority           INT NOT NULL,
     marks              INT,
     distance           DOUBLE NOT NULL,
     num_between_school INT NOT NULL,
     FOREIGN KEY(applicant_id) REFERENCES applicant(applicant_id) ON DELETE
     CASCADE,
     FOREIGN KEY(school_id) REFERENCES school(school_id) ON DELETE CASCADE,
     UNIQUE(applicant_id, priority)
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE student
  (
     admission_no    INT NOT NULL auto_increment PRIMARY KEY,
     first_name      VARCHAR(255) NOT NULL,
     last_name       VARCHAR(255),
     registered_date DATE
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE present_student
  (
     present_stu_id INT NOT NULL PRIMARY KEY REFERENCES student(admission_no)
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE past_student
  (
     past_stu_id      INT NOT NULL PRIMARY KEY REFERENCES student(admission_no),
     membership_id    INT NOT NULL,
     school_left_date DATE,
     membership_date  DATE
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE applicant_sibling
  (
     applicant_id   INT NOT NULL,
     present_stu_id INT NOT NULL,
     FOREIGN KEY (applicant_id) REFERENCES applicant(applicant_id),
     FOREIGN KEY (present_stu_id) REFERENCES present_student(present_stu_id)
  )
engine=innodb
DEFAULT charset=utf8;

CREATE TABLE guardian_past_pupil
  (
     guardian_id INT NOT NULL,
     past_stu_id INT NOT NULL,
     FOREIGN KEY (guardian_id) REFERENCES applicant_guardian(guardian_id),
     FOREIGN KEY (past_stu_id) REFERENCES past_student(past_stu_id)
  )
engine=innodb
DEFAULT charset=utf8;