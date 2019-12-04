<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-13 13:21:37 --> Query error: Unknown column 'tm' in 'field list' - Invalid query: INSERT INTO `kupl` (`jobs_id`, `kup_no`, `tgl`, `sample_received`, `complete_analysis`, `tm`, `im`, `ash`, `vm`, `ts`, `cv`, `aft`, `other_remark`, `created_by`, `updated_by`) VALUES ('1', '1', '1970-01-01', '1970-01-01', '1970-01-01', NULL, 0, 0, 0, '1', 0, 'Subkontrak', '456', '17', '17')
ERROR - 2019-01-13 13:21:37 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 13:21:37 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 13:21:49 --> Query error: Unknown column 'aft' in 'field list' - Invalid query: INSERT INTO `kupl` (`jobs_id`, `kup_no`, `tgl`, `sample_received`, `complete_analysis`, `iso_test`, `astm_test`, `as_test`, `gb_test`, `test_equipment`, `personnel_cap`, `aft`, `other_remark`, `created_by`, `updated_by`) VALUES ('1', '1', '1970-01-01', '1970-01-01', '1970-01-01', '1', '1', 0, 0, '1', 0, 'Subkontrak', '456', '17', '17')
ERROR - 2019-01-13 13:21:49 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 13:21:49 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 13:22:20 --> Query error: Unknown column 'other_remark' in 'field list' - Invalid query: INSERT INTO `kupl` (`jobs_id`, `kup_no`, `tgl`, `sample_received`, `complete_analysis`, `iso_test`, `astm_test`, `as_test`, `gb_test`, `test_equipment`, `personnel_cap`, `remarks`, `other_remark`, `created_by`, `updated_by`) VALUES ('1', '1', '1970-01-01', '1970-01-01', '1970-01-01', '1', '1', 0, 0, '1', 0, 'Subkontrak', '456', '17', '17')
ERROR - 2019-01-13 13:22:20 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 13:22:20 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 13:26:59 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `kupl` (`jobs_id`, `kup_no`, `tgl`, `sample_received`, `complete_analysis`, `iso_test`, `astm_test`, `as_test`, `gb_test`, `test_equipment`, `personnel_cap`, `remarks`, `other_remarks`, `created_by`, `updated_by`) VALUES ('1', '123', '1970-01-01', '1970-01-01', '1970-01-01', '1', '1', '1', 0, '1', '1', 'OK', Array, '17', '17')
ERROR - 2019-01-13 13:26:59 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 13:26:59 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 13:37:39 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `kupl` (`jobs_id`, `kup_no`, `tgl`, `sample_received`, `complete_analysis`, `other_remarks`, `created_by`, `updated_by`) VALUES ('1', '123', '1970-01-01', '1970-01-01', '1970-01-01', Array, '17', '17')
ERROR - 2019-01-13 13:37:39 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 13:37:39 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 13:38:48 --> Severity: error --> Exception: syntax error, unexpected ')', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\xampp2\htdocs\scci\application\views\kupl\edit.php 30
ERROR - 2019-01-13 13:41:58 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `kupl_detail`
WHERE `jobs_id` = '1'
ERROR - 2019-01-13 13:41:58 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 13:41:58 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 13:42:28 --> Severity: error --> Exception: Call to undefined method stdClass::result() C:\xampp2\htdocs\scci\application\views\kupl\edit.php 144
ERROR - 2019-01-13 15:37:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - Invalid query: delete from kupl_detail where kupl_id=
ERROR - 2019-01-13 15:37:05 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 15:37:05 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 15:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - Invalid query: delete from kupl_detail where kupl_id=
ERROR - 2019-01-13 15:37:50 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 15:37:50 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 15:52:09 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp2\htdocs\scci\application\controllers\Job.php 531
ERROR - 2019-01-13 16:31:45 --> Severity: error --> Exception: Call to undefined function strototime() C:\xampp2\htdocs\scci\application\views\kupm\edit.php 32
ERROR - 2019-01-13 16:39:54 --> Query error: Unknown column 'kupl_id' in 'field list' - Invalid query: INSERT INTO `kupm_detail` (`kupl_id`, `job_desc`, `manpower`, `remark`) VALUES (1, '1', '2', NULL)
ERROR - 2019-01-13 16:39:54 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 16:39:54 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 16:40:19 --> Query error: Unknown column 'kupl_id' in 'field list' - Invalid query: INSERT INTO `kupm_detail` (`kupl_id`, `job_desc`, `manpower`, `remark`) VALUES (1, '1', '2', '3')
ERROR - 2019-01-13 16:40:19 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 16:40:19 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 16:46:01 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`scci_operasional`.`kupm_detail`, CONSTRAINT `kupm_detail_ibfk_1` FOREIGN KEY (`kupm_id`) REFERENCES `kupm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: UPDATE `kupm_detail` SET `kupm_id` = NULL, `job_desc` = '1', `manpower` = '2', `remark` = '3'
ERROR - 2019-01-13 16:46:01 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 16:46:01 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 16:48:55 --> Query error: Unknown column 'kupl_id' in 'where clause' - Invalid query: delete from kupm_detail where kupl_id=1
ERROR - 2019-01-13 16:48:55 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-13 16:48:55 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-13 17:00:26 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp2\htdocs\scci\application\controllers\Job.php 609
ERROR - 2019-01-13 22:25:20 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp2\htdocs\scci\application\views\kupe\edit.php 46
