<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-25 09:28:36 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 09:42:26 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 09:42:28 --> Severity: Warning --> join() expects at most 2 parameters, 3 given C:\xampp2\htdocs\scci\application\controllers\api\Job.php 64
ERROR - 2018-11-25 09:42:28 --> Severity: error --> Exception: Call to a member function from() on null C:\xampp2\htdocs\scci\application\controllers\api\Job.php 65
ERROR - 2018-11-25 09:43:04 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 10:11:37 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 10:11:40 --> Severity: Warning --> join() expects at most 2 parameters, 3 given C:\xampp2\htdocs\scci\application\controllers\api\Job.php 64
ERROR - 2018-11-25 10:11:40 --> Severity: error --> Exception: Call to a member function from() on null C:\xampp2\htdocs\scci\application\controllers\api\Job.php 65
ERROR - 2018-11-25 10:12:03 --> Severity: Warning --> join() expects at most 2 parameters, 3 given C:\xampp2\htdocs\scci\application\controllers\api\Job.php 64
ERROR - 2018-11-25 10:12:03 --> Severity: error --> Exception: Call to a member function from() on null C:\xampp2\htdocs\scci\application\controllers\api\Job.php 65
ERROR - 2018-11-25 10:12:42 --> Severity: Warning --> join() expects at most 2 parameters, 3 given C:\xampp2\htdocs\scci\application\controllers\api\Job.php 64
ERROR - 2018-11-25 10:12:42 --> Severity: error --> Exception: Call to a member function from() on null C:\xampp2\htdocs\scci\application\controllers\api\Job.php 65
ERROR - 2018-11-25 10:13:02 --> Query error: Not unique table/alias: 'company_pic' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `jobs`.`companypic_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
WHERE `jobs`.`cabangref_id` = '2'
ERROR - 2018-11-25 10:13:02 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-25 10:13:02 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-25 10:13:47 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 10:14:23 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 10:22:17 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-25 10:25:55 --> Severity: error --> Exception: Call to undefined method stdClass::result() C:\xampp2\htdocs\scci\application\views\quot\edit.php 319
ERROR - 2018-11-25 10:26:44 --> Severity: error --> Exception: Call to undefined method stdClass::result() C:\xampp2\htdocs\scci\application\views\quot\edit.php 319
ERROR - 2018-11-25 10:27:59 --> Severity: error --> Exception: Call to undefined method stdClass::result() C:\xampp2\htdocs\scci\application\views\quot\edit.php 319
ERROR - 2018-11-25 10:28:00 --> Severity: error --> Exception: Call to undefined method stdClass::result() C:\xampp2\htdocs\scci\application\views\quot\edit.php 319
ERROR - 2018-11-25 10:29:39 --> Severity: error --> Exception: syntax error, unexpected '$opt' (T_VARIABLE) C:\xampp2\htdocs\scci\application\views\quot\edit.php 110
ERROR - 2018-11-25 11:35:34 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
