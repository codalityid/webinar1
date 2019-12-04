<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-22 11:39:54 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-22 11:48:18 --> Could not find the language line "insert_success"
ERROR - 2018-11-22 11:48:50 --> Could not find the language line "update_success"
ERROR - 2018-11-22 12:28:29 --> Severity: error --> Exception: Call to undefined method Company_anggaran_model::create() C:\xampp2\htdocs\scci\application\controllers\Datacust.php 342
ERROR - 2018-11-22 12:28:45 --> Severity: error --> Exception: Call to undefined method Company_anggaran_model::insert() C:\xampp2\htdocs\scci\application\controllers\Datacust.php 342
ERROR - 2018-11-22 12:30:53 --> Severity: error --> Exception: Call to undefined method Users_model::update() C:\xampp2\htdocs\scci\application\controllers\Datacust.php 479
ERROR - 2018-11-22 13:51:22 --> Query error: Unknown column 'job_no' in 'where clause' - Invalid query: SELECT *
FROM `quotation_1`
WHERE `job_no` != ''
ERROR - 2018-11-22 13:52:23 --> Query error: Unknown column 'job_no' in 'where clause' - Invalid query: SELECT *
FROM `quotation_1`
WHERE `job_no` != ''
ERROR - 2018-11-22 13:52:23 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 13:52:23 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 13:53:40 --> Query error: Unknown column 'job_no' in 'where clause' - Invalid query: SELECT *
FROM `quotation_1`
WHERE `job_no` != ''
ERROR - 2018-11-22 13:53:40 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 13:53:40 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 13:54:07 --> Query error: Unknown column 'job_no' in 'where clause' - Invalid query: SELECT *
FROM `quotation_1`
WHERE `job_no` != ''
ERROR - 2018-11-22 13:54:07 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 13:54:07 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:02:26 --> Language file contains no data: language/indonesia/form_validation_lang.php
ERROR - 2018-11-22 14:02:41 --> Language file contains no data: language/indonesia/form_validation_lang.php
ERROR - 2018-11-22 14:02:41 --> Language file contains no data: language/indonesia/upload_lang.php
ERROR - 2018-11-22 14:02:41 --> Could not find the language line "upload_no_file_selected"
ERROR - 2018-11-22 14:02:41 --> Query error: Unknown column 'attachment' in 'field list' - Invalid query: INSERT INTO `quotation_1` (`quotation_no`, `ordered_by`, `cust_ref`, `company_id`, `attachment`, `cabang_id`) VALUES ('1', '2', '3', '2', '', '1')
ERROR - 2018-11-22 14:02:41 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:02:41 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:22:49 --> Language file contains no data: language/indonesia/form_validation_lang.php
ERROR - 2018-11-22 14:22:49 --> Language file contains no data: language/indonesia/upload_lang.php
ERROR - 2018-11-22 14:22:49 --> Could not find the language line "upload_no_file_selected"
ERROR - 2018-11-22 14:22:49 --> Query error: Unknown column 'attachment' in 'field list' - Invalid query: INSERT INTO `quotation_1` (`quotation_no`, `ordered_by`, `cust_ref`, `company_id`, `attachment`, `cabang_id`) VALUES ('1', '2', '3', '5', '', '1')
ERROR - 2018-11-22 14:22:49 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:22:49 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:40:57 --> Language file contains no data: language/indonesia/form_validation_lang.php
ERROR - 2018-11-22 14:40:57 --> Language file contains no data: language/indonesia/upload_lang.php
ERROR - 2018-11-22 14:40:57 --> Could not find the language line "upload_no_file_selected"
ERROR - 2018-11-22 14:43:42 --> Query error: Unknown column 'quotation_1.companypic_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`
FROM `jobs`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
ERROR - 2018-11-22 14:43:42 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:43:42 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:44:14 --> Query error: Unknown column 'quotation_1.companypic_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`
FROM `jobs`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
ERROR - 2018-11-22 14:44:14 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:44:14 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:45:14 --> Query error: Unknown column 'quotation_1.companypic_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`
FROM `jobs`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
ERROR - 2018-11-22 14:45:15 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:45:15 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:45:33 --> Query error: Unknown column 'quotation_1.companypic_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`
FROM `jobs`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
ERROR - 2018-11-22 14:45:33 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:45:33 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 14:55:15 --> Query error: Table 'scci_operasional.cabang' doesn't exist - Invalid query: SELECT *
FROM `cabang`
ERROR - 2018-11-22 14:55:15 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 14:55:15 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 15:03:28 --> Severity: Notice --> Undefined property: stdClass::$quotation_no C:\xampp2\htdocs\scci\application\views\quot\edit.php 40
ERROR - 2018-11-22 15:03:28 --> Severity: Notice --> Undefined property: stdClass::$ordered_by C:\xampp2\htdocs\scci\application\views\quot\edit.php 45
ERROR - 2018-11-22 15:03:28 --> Severity: Notice --> Undefined property: stdClass::$cust_ref C:\xampp2\htdocs\scci\application\views\quot\edit.php 50
ERROR - 2018-11-22 15:05:12 --> Query error: Table 'scci_operasional.quotation' doesn't exist - Invalid query: SELECT *
FROM `quotation`
WHERE `id` = '1'
ERROR - 2018-11-22 15:05:12 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 15:05:12 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 15:05:17 --> Query error: Table 'scci_operasional.quotation' doesn't exist - Invalid query: SELECT *
FROM `quotation`
WHERE `id` = '1'
ERROR - 2018-11-22 15:05:17 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 15:05:17 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 15:21:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\Quot.php 419
ERROR - 2018-11-22 15:21:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\Quot.php 420
ERROR - 2018-11-22 15:27:56 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\Quot.php 437
ERROR - 2018-11-22 15:27:56 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\Quot.php 438
ERROR - 2018-11-22 16:15:54 --> Severity: 4096 --> Object of class Datatables could not be converted to string C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 36
ERROR - 2018-11-22 16:16:54 --> Severity: 4096 --> Object of class Datatables could not be converted to string C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 36
ERROR - 2018-11-22 16:17:14 --> Severity: 4096 --> Object of class Datatables could not be converted to string C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 36
ERROR - 2018-11-22 16:17:24 --> Severity: 4096 --> Object of class Datatables could not be converted to string C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 36
ERROR - 2018-11-22 16:17:45 --> Severity: error --> Exception: Call to undefined method Datatables::generete() C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 25
ERROR - 2018-11-22 21:33:40 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-22 21:42:00 --> Severity: Notice --> Undefined property: stdClass::$service_fee C:\xampp2\htdocs\scci\application\views\quot\edit.php 204
ERROR - 2018-11-22 21:42:01 --> Severity: Notice --> Undefined property: stdClass::$satuan C:\xampp2\htdocs\scci\application\views\quot\edit.php 221
ERROR - 2018-11-22 21:42:01 --> Severity: Notice --> Undefined property: stdClass::$include_vat C:\xampp2\htdocs\scci\application\views\quot\edit.php 236
ERROR - 2018-11-22 21:42:27 --> Severity: Notice --> Undefined property: stdClass::$service_fee C:\xampp2\htdocs\scci\application\views\quot\edit.php 204
ERROR - 2018-11-22 21:42:27 --> Severity: Notice --> Undefined property: stdClass::$satuan C:\xampp2\htdocs\scci\application\views\quot\edit.php 221
ERROR - 2018-11-22 21:42:27 --> Severity: Notice --> Undefined property: stdClass::$include_vat C:\xampp2\htdocs\scci\application\views\quot\edit.php 236
ERROR - 2018-11-22 21:48:55 --> Severity: Notice --> Undefined variable: row_quotation5 C:\xampp2\htdocs\scci\application\views\quot\edit.php 258
ERROR - 2018-11-22 21:48:55 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 258
ERROR - 2018-11-22 21:53:27 --> Query error: Unknown column 'quotation_id' in 'where clause' - Invalid query: SELECT *
FROM `quotation_7`
WHERE `quotation_id` = '1'
ERROR - 2018-11-22 21:53:27 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-22 21:53:27 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-22 21:53:52 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 280
ERROR - 2018-11-22 21:57:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 280
ERROR - 2018-11-22 21:57:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 291
ERROR - 2018-11-22 22:05:21 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 280
ERROR - 2018-11-22 22:05:21 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 291
ERROR - 2018-11-22 22:05:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 280
ERROR - 2018-11-22 22:05:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 291
ERROR - 2018-11-22 22:07:43 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 280
ERROR - 2018-11-22 22:07:43 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\quot\edit.php 291
