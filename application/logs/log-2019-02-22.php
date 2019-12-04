<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-02-22 18:57:06 --> Severity: Warning --> join() expects at most 2 parameters, 3 given C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 32
ERROR - 2019-02-22 18:57:06 --> Severity: error --> Exception: Call to a member function from() on null C:\xampp2\htdocs\scci\application\controllers\api\Quot.php 33
ERROR - 2019-02-22 18:59:00 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-22 18:59:00 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-22 18:59:00 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-22 18:59:03 --> Severity: error --> Exception: Too few arguments to function Rab::add(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Rab.php 28
ERROR - 2019-02-22 19:07:30 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-22 19:07:30 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-22 19:07:30 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-22 19:07:32 --> Severity: error --> Exception: Too few arguments to function Rab::add(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Rab.php 28
ERROR - 2019-02-22 19:20:45 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-22 19:20:45 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-22 19:20:45 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-22 19:20:48 --> Severity: error --> Exception: Too few arguments to function Rab::add(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Rab.php 28
ERROR - 2019-02-22 19:20:52 --> Query error: Unknown column 'quotation_1.job_no' in 'field list' - Invalid query: SELECT `rab`.`id`, `quotation_1`.`job_no`, `company`.`nama_perusahaan`, `rab`.`quantity`
FROM `rab`
LEFT JOIN `quotation_1` ON `quotation_1`.`id`=`rab`.`job_id`
LEFT JOIN `company` ON `quotation_1`.`company_id`=`company`.`id`
ERROR - 2019-02-22 19:20:52 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-02-22 19:20:52 --> Could not find the language line "db_error_heading"
ERROR - 2019-02-22 19:43:49 --> Severity: error --> Exception: Call to undefined method stdClass::result() C:\xampp2\htdocs\scci\application\views\quot\edit.php 472
