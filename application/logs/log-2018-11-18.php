<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-18 15:36:02 --> Severity: Notice --> Undefined variable: url C:\xampp2\htdocs\scci\application\controllers\Credential.php 39
ERROR - 2018-11-18 15:45:31 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp2\htdocs\scci\vendor\codeigniter\framework\system\helpers\form_helper.php 438
ERROR - 2018-11-18 17:27:27 --> Severity: error --> Exception: Call to undefined method Personil_model::get_data_by_cabang_id() C:\xampp2\htdocs\scci\application\controllers\Job.php 203
ERROR - 2018-11-18 17:45:10 --> Query error: Unknown column 'cabang_ref.nama' in 'field list' - Invalid query: select personil.id, cabang_ref.nama, personil.nik, personil.nama, jabatan_ref.jabatan from personil where personil.id = 1
ERROR - 2018-11-18 17:45:13 --> Query error: Unknown column 'cabang_ref.nama' in 'field list' - Invalid query: select personil.id, cabang_ref.nama, personil.nik, personil.nama, jabatan_ref.jabatan from personil where personil.id = 2
ERROR - 2018-11-18 17:45:27 --> Query error: Unknown column 'cabang_ref.nama' in 'field list' - Invalid query: select personil.id, cabang_ref.nama, personil.nik, personil.nama, jabatan_ref.jabatan from personil where personil.id = 3
ERROR - 2018-11-18 17:46:55 --> Query error: Table 'scci_operasional.cabang' doesn't exist - Invalid query: select personil.id, cabang_ref.nama, personil.nik, personil.nama, jabatan_ref.jabatan 
        from personil 
        left join cabang on cabang.id = personil.cabang_id 
        left join jabatan_ref on jabatan_ref.id = personil.jabatanref_id 
        where personil.id = 1
ERROR - 2018-11-18 17:47:15 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\api\Job.php 63
ERROR - 2018-11-18 17:47:16 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\api\Job.php 64
ERROR - 2018-11-18 17:51:42 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\api\Job.php 63
ERROR - 2018-11-18 17:51:42 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\api\Job.php 64
ERROR - 2018-11-18 17:53:30 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\api\Job.php 62
ERROR - 2018-11-18 17:53:30 --> Severity: Notice --> Trying to get property of non-object C:\xampp2\htdocs\scci\application\controllers\api\Job.php 63
