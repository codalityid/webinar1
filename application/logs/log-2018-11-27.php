<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-27 10:54:14 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-27 12:39:20 --> 404 Page Not Found: Rab/1
ERROR - 2018-11-27 12:47:09 --> 404 Page Not Found: Rab/1
ERROR - 2018-11-27 12:50:00 --> Query error: Unknown column 'job_no' in 'where clause' - Invalid query: SELECT *
FROM `quotation_1`
WHERE `job_no` != ''
ERROR - 2018-11-27 12:50:00 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 12:50:00 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 12:52:08 --> Severity: Notice --> Undefined property: stdClass::$job_no C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:53:30 --> Severity: Notice --> Undefined property: stdClass::$job_no C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:55:29 --> Severity: Notice --> Undefined variable: row_job C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:55:29 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:56:42 --> Severity: Notice --> Undefined variable: id C:\xampp2\htdocs\scci\application\controllers\Rab.php 75
ERROR - 2018-11-27 12:56:42 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$job_no C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:57:07 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$job_no C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:58:30 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$job_no C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:58:47 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$job_no C:\xampp2\htdocs\scci\application\views\rab\create.php 21
ERROR - 2018-11-27 12:58:56 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::row() C:\xampp2\htdocs\scci\application\controllers\Rab.php 75
ERROR - 2018-11-27 13:02:36 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT *
FROM `jobs`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
WHERE `id` = '1'
ERROR - 2018-11-27 13:02:36 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:02:36 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:04:49 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2018-11-27 13:04:49 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:04:49 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:10:10 --> Severity: Notice --> Undefined variable: qRab C:\xampp2\htdocs\scci\application\views\job\index.php 78
ERROR - 2018-11-27 13:10:10 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\job\index.php 78
ERROR - 2018-11-27 13:10:35 --> Severity: Notice --> Undefined variable: qRab C:\xampp2\htdocs\scci\application\views\job\index.php 78
ERROR - 2018-11-27 13:10:35 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\views\job\index.php 78
ERROR - 2018-11-27 13:15:39 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:15:39 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:15:39 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:15:39 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:15:39 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:15:39 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:15:39 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:15:39 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:15:39 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:15:56 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:15:56 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:15:56 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:15:56 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:15:56 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:15:56 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:15:56 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:15:56 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:15:56 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:15 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:15 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:15 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:15 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:15 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:15 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:15 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:15 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:15 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:25 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:25 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:25 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:25 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:25 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:25 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:25 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:25 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:25 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:36 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:36 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:36 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:43 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:43 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:43 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:43 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:43 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:43 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:43 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:43 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:43 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:16:47 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `rab`
WHERE `jobs_id` = '1'
ERROR - 2018-11-27 13:16:47 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-11-27 13:16:47 --> Could not find the language line "db_error_heading"
ERROR - 2018-11-27 13:52:38 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-27 13:52:53 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-27 14:26:36 --> Severity: Notice --> Use of undefined constant counter - assumed 'counter' C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:26:36 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:26:36 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:26:36 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:07 --> Severity: Notice --> Use of undefined constant counter - assumed 'counter' C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:07 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:07 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:07 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:11 --> Severity: Notice --> Use of undefined constant counter - assumed 'counter' C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:11 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:11 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:27:11 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:46:31 --> Severity: Notice --> Use of undefined constant counter - assumed 'counter' C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 173
ERROR - 2018-11-27 14:46:31 --> Severity: Notice --> Use of undefined constant counter - assumed 'counter' C:\xampp2\htdocs\scci\application\controllers\Rab.php 181
ERROR - 2018-11-27 14:46:31 --> Severity: Notice --> A non well formed numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 181
ERROR - 2018-11-27 14:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 181
ERROR - 2018-11-27 14:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp2\htdocs\scci\application\controllers\Rab.php 181
