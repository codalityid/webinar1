<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-11 11:01:35 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 41
ERROR - 2019-01-11 14:07:00 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 274
ERROR - 2019-01-11 14:08:07 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 274
ERROR - 2019-01-11 14:08:22 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 274
ERROR - 2019-01-11 14:08:43 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 275
ERROR - 2019-01-11 14:09:50 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 275
ERROR - 2019-01-11 14:32:22 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 275
ERROR - 2019-01-11 14:32:30 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 275
ERROR - 2019-01-11 14:33:10 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 275
ERROR - 2019-01-11 14:34:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 276
ERROR - 2019-01-11 14:36:02 --> Severity: Notice --> Undefined offset: 1 C:\xampp2\htdocs\scci\application\controllers\Job.php 276
ERROR - 2019-01-11 15:57:04 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `form_tugas_harian_detail`
WHERE `jobs_id` = '1'
ERROR - 2019-01-11 15:57:04 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-11 15:57:04 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-11 16:01:24 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `form_tugas_harian_detail`
WHERE `jobs_id` IS NULL
ERROR - 2019-01-11 16:01:24 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-11 16:01:24 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-11 16:01:40 --> Query error: Unknown column 'jobs_id' in 'where clause' - Invalid query: SELECT *
FROM `form_tugas_harian_detail`
WHERE `jobs_id` IS NULL
ERROR - 2019-01-11 16:01:40 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-11 16:01:40 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-11 16:04:54 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp2\htdocs\scci\application\controllers\Job.php 345
ERROR - 2019-01-11 16:23:51 --> Query error: Column 'jobs_id' cannot be null - Invalid query: INSERT INTO `form_tugas_harian` (`jobs_id`, `created_by`, `tgl`, `tm`, `im`, `ash`, `vm`, `ts`, `cv`, `hgi`, `aft`, `aa`, `ult`, `size`, `other`, `petugas`, `keterangan`) VALUES (NULL, '17', '2019-01-01', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '')
ERROR - 2019-01-11 16:23:52 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-11 16:23:52 --> Could not find the language line "db_error_heading"
ERROR - 2019-01-11 16:24:50 --> Query error: Duplicate entry '1' for key 'PRIMARY' - Invalid query: UPDATE `form_tugas_harian` SET `id` = '1', `created_by` = '17', `tgl` = '2019-01-01', `tm` = '1', `im` = 0, `ash` = 0, `vm` = 0, `ts` = 0, `cv` = 0, `hgi` = 0, `aft` = 0, `aa` = 0, `ult` = 0, `size` = 0, `other` = 0, `petugas` = '', `keterangan` = ''
ERROR - 2019-01-11 16:24:50 --> Language file contains no data: language/indonesia/db_lang.php
ERROR - 2019-01-11 16:24:50 --> Could not find the language line "db_error_heading"
