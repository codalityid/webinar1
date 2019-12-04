<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-15 10:38:04 --> Query error: Table 'scci_operasional.inhouse' doesn't exist - Invalid query: SELECT *
FROM `inhouse`
WHERE `jobs_id` = '1'
ERROR - 2019-01-15 10:38:04 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 10:38:04 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 13:11:42 --> Severity: error --> Exception: Call to undefined function strotime() C:\xampp2\htdocs\scci\application\views\inhouse\edit.php 33
ERROR - 2019-01-15 13:18:03 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp2\htdocs\scci\application\controllers\Job.php 777
ERROR - 2019-01-15 13:18:52 --> Query error: Table 'scci_operasional.crm' doesn't exist - Invalid query: SELECT *
FROM `crm`
WHERE `jobs_id` = '1'
ERROR - 2019-01-15 13:18:52 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 13:18:52 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 13:43:18 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp2\htdocs\scci\application\views\crm\edit.php 46
ERROR - 2019-01-15 15:02:19 --> Query error: Unknown column 'crm_id' in 'where clause' - Invalid query: SELECT *
FROM `round_robin_detail`
WHERE `crm_id` IS NULL
ERROR - 2019-01-15 15:02:19 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 15:02:19 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 15:03:42 --> Query error: Unknown column 'crm_id' in 'where clause' - Invalid query: SELECT *
FROM `round_robin_detail`
WHERE `crm_id` IS NULL
ERROR - 2019-01-15 15:03:42 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 15:03:42 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 15:04:11 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp2\htdocs\scci\application\views\round_robin\edit.php 98
ERROR - 2019-01-15 15:10:32 --> Query error: Unknown column 'crm_no' in 'field list' - Invalid query: UPDATE `round_robin` SET `jobs_id` = '1', `crm_no` = NULL, `tgl` = '1970-01-01', `updated_by` = '17'
WHERE `id` = '1'
ERROR - 2019-01-15 15:10:32 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 15:10:32 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 15:11:11 --> Query error: Unknown column 'detail_id' in 'where clause' - Invalid query: UPDATE `round_robin_detail` SET `tgl` = '01/01/1970', `instansi_rr` = '1', `adb` = '2', `db_internal` = '3', `db_analisa` = '4', `db_selisih` = '5', `remark` = '6'
WHERE `detail_id` = '1'
ERROR - 2019-01-15 15:11:11 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 15:11:11 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 15:11:39 --> Query error: Unknown column 'detail_id' in 'where clause' - Invalid query: UPDATE `round_robin_detail` SET `tgl` = '1970-01-01', `instansi_rr` = '1', `adb` = '2', `db_internal` = '3', `db_analisa` = '4', `db_selisih` = '5', `remark` = '6'
WHERE `detail_id` = '1'
ERROR - 2019-01-15 15:11:39 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 15:11:39 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 15:13:07 --> Query error: Unknown column 'detail_id' in 'where clause' - Invalid query: UPDATE `round_robin_detail` SET `tgl` = '2019-01-15', `instansi_rr` = '1', `adb` = '2', `db_internal` = '3', `db_analisa` = '4', `db_selisih` = '5', `remark` = '6'
WHERE `detail_id` = '1'
ERROR - 2019-01-15 15:13:07 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 15:13:07 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 18:33:51 --> Severity: error --> Exception: Too few arguments to function Uangmuka::edit(), 1 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp2\htdocs\scci\application\controllers\Uangmuka.php 68
ERROR - 2019-01-15 18:36:22 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp2\htdocs\scci\application\views\uangmuka\edit_rencana.php 65
ERROR - 2019-01-15 18:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: select jobs.job_no, company.nama_perusahaan
        from jobs 
        left join company on company.id=jobs.company_id 
        where jobs.id=
ERROR - 2019-01-15 18:39:45 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 18:39:45 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-15 18:40:07 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp2\htdocs\scci\application\views\uangmuka\edit_rencana.php 66
ERROR - 2019-01-15 18:46:10 --> Severity: error --> Exception: Too few arguments to function Uangmuka::index(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Uangmuka.php 18
ERROR - 2019-01-15 18:46:34 --> Severity: error --> Exception: Too few arguments to function Uangmuka::index(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Uangmuka.php 18
ERROR - 2019-01-15 19:24:54 --> Severity: error --> Exception: Too few arguments to function Uangmuka::index(), 0 passed in C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp2\htdocs\scci\application\controllers\Uangmuka.php 18
ERROR - 2019-01-15 19:32:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: select jobs.job_no, company.nama_perusahaan
        from jobs 
        left join company on company.id=jobs.company_id 
        where jobs.id=
ERROR - 2019-01-15 19:32:24 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-15 19:32:24 --> Could not find the language line "db_error_heading"
