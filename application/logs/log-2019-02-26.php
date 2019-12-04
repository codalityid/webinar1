<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-02-26 11:30:36 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-26 11:30:36 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:30:36 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:35:29 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-26 11:35:29 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:35:29 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:47:25 --> Severity: error --> Exception: Too few arguments to function Rab::add(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Rab.php 28
ERROR - 2019-02-26 11:47:40 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-26 11:47:40 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:47:40 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:47:45 --> 404 Page Not Found: Rab/1
ERROR - 2019-02-26 11:47:48 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-26 11:47:48 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:47:48 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:50:58 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-26 11:50:58 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:50:58 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:51:51 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-26 11:51:51 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:51:51 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:52:26 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 11:52:26 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:52:26 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:52:41 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 11:52:41 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:52:41 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:53:09 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 11:53:09 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:53:09 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:53:26 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 11:53:26 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 11:53:26 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 11:54:50 --> Severity: error --> Exception: Too few arguments to function Rab::add(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Rab.php 17
ERROR - 2019-02-26 12:02:36 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 12:02:36 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 12:02:36 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 12:02:52 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 12:02:52 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 12:02:52 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 12:04:06 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 12:04:06 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 12:04:06 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 12:04:21 --> Severity: Warning --> join() expects at most 2 parameters, 3 given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 32
ERROR - 2019-02-26 12:04:21 --> Severity: error --> Exception: Call to a member function from() on null C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 33
ERROR - 2019-02-26 12:04:25 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `jobs`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
WHERE `jobs`.`cabangref_id` = '2'
ERROR - 2019-02-26 12:04:25 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 12:04:25 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-26 14:34:47 --> Query error: Unknown column 'rab.job_id' in 'on clause' - Invalid query: SELECT `jobs`.`id`, `jobs`.`job_no`, `company`.`nama_perusahaan`, `company_pic`.`nama_pic`, `company_pic`.`tlp`, `rab`.`id` AS `rab_id`
FROM `jobs`
LEFT JOIN `quotation_1` ON `quotation_1`.`id` = `jobs`.`quotation1_id`
LEFT JOIN `company` ON `company`.`id` = `jobs`.`company_id`
LEFT JOIN `company_pic` ON `company_pic`.`id` = `quotation_1`.`companypic_id`
LEFT JOIN `rab` ON `rab`.`job_id` = `jobs`.`id`
ERROR - 2019-02-26 14:34:47 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-26 14:34:47 --> Could not find the language line "db_error_heading"
