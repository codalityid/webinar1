<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-02 09:55:42 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2018-12-02 11:24:00 --> Severity: Notice --> Undefined variable: opt_groupref C:\xampp2\htdocs\scci\application\views\rab\create.php 71
ERROR - 2018-12-02 11:47:26 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 11:47:39 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 11:47:54 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 11:48:13 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 12:52:23 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 12:52:39 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 12:53:41 --> 404 Page Not Found: api/Rab/get_subgroup
ERROR - 2018-12-02 12:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*' at line 2 - Invalid query: SELECT *
FROM *
ERROR - 2018-12-02 12:53:59 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 12:53:59 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 12:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*' at line 2 - Invalid query: SELECT *
FROM *
ERROR - 2018-12-02 12:54:06 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 12:54:06 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 12:54:25 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 16
ERROR - 2018-12-02 12:54:45 --> Severity: Notice --> Undefined variable: option C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 18
ERROR - 2018-12-02 12:54:45 --> Severity: Notice --> Undefined property: stdClass::$text C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 20
ERROR - 2018-12-02 12:54:45 --> Severity: Notice --> Undefined property: stdClass::$text C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 20
ERROR - 2018-12-02 12:55:07 --> Severity: Notice --> Undefined property: stdClass::$text C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 20
ERROR - 2018-12-02 12:55:07 --> Severity: Notice --> Undefined property: stdClass::$text C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 20
ERROR - 2018-12-02 12:55:25 --> Severity: Notice --> Undefined property: stdClass::$text C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 21
ERROR - 2018-12-02 12:55:25 --> Severity: Notice --> Undefined property: stdClass::$text C:\xampp2\htdocs\scci\application\controllers\api\Rab.php 21
ERROR - 2018-12-02 13:49:42 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2018-12-02 13:52:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'null' at line 7 - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
WHERE ppi_id NOT null
ERROR - 2018-12-02 13:52:40 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:52:40 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:53:05 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2018-12-02 13:54:00 --> Query error: Unknown column 'quotation_1.cabang_id' in 'where clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `jobs`.`si_attachment`, `jobs`.`kontrak_attachment`, `jobs`.`quotation1_id`, `jobs`.`srt_tugas_lap`, `jobs`.`ik_prep`, `jobs`.`ik_lab`, `jobs`.`uangmuka_id`, `jobs`.`ppi_id`
FROM `jobs`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
WHERE `quotation_1`.`cabang_id` = '2'
ERROR - 2018-12-02 13:54:00 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:54:00 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:54:45 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2018-12-02 13:56:26 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2018-12-02 13:56:30 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2018-12-02 13:56:30 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:56:30 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:56:49 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2018-12-02 13:56:49 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:56:49 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:57:08 --> 404 Page Not Found: api/Job/datatable_kacab
ERROR - 2018-12-02 13:57:27 --> 404 Page Not Found: api/Job/datatable_kacab
ERROR - 2018-12-02 13:57:52 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2018-12-02 13:57:52 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:57:52 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:57:57 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2018-12-02 13:57:57 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:57:57 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:58:01 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2018-12-02 13:58:01 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:58:01 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 13:58:29 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2018-12-02 13:58:29 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 13:58:29 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 14:06:40 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2018-12-02 19:48:11 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 60
ERROR - 2018-12-02 19:48:24 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 60
ERROR - 2018-12-02 19:48:28 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 60
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:48:35 --> Severity: Notice --> Undefined property: stdClass::$group_desc3 C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 52
ERROR - 2018-12-02 19:51:10 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 42
ERROR - 2018-12-02 19:51:15 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 42
ERROR - 2018-12-02 19:51:18 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 42
ERROR - 2018-12-02 19:51:19 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 42
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:17:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:22:54 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:04 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:36 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:57 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:23:58 --> Severity: Warning --> in_array() expects parameter 2 to be array, boolean given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:06 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:06 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:24:06 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:25:21 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:25 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:47 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:28:59 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 73
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:29:28 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 74
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:30:42 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 67
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 68
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 68
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 68
ERROR - 2018-12-02 20:31:22 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 68
ERROR - 2018-12-02 20:31:23 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 68
ERROR - 2018-12-02 20:32:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:05 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:06 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:06 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:32:06 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 82
ERROR - 2018-12-02 20:42:41 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:42:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:42:41 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:42:41 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:42:43 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:42:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:42:43 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:42:43 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:43:12 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:43:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:43:12 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:43:12 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:43:14 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:43:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:43:14 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:43:14 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:43:17 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:43:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:43:17 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:43:17 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:44:48 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:44:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:44:48 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:44:48 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:44:49 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:44:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:44:49 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:44:49 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:44:53 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:44:53 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:44:53 --> Could not find the language line "db_error_heading"
ERROR - 2018-12-02 20:46:00 --> Severity: Notice --> Undefined variable: table C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 48
ERROR - 2018-12-02 20:46:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE YEAR(effective_date) = '2018'' at line 2 - Invalid query: SELECT *
WHERE YEAR(effective_date) = '2018'
ERROR - 2018-12-02 20:46:00 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2018-12-02 20:46:00 --> Could not find the language line "db_error_heading"
