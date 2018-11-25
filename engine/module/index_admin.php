<?php
//$allModules = getAssocResult('select * from modules');
//$vars = [
//    'title' => 'Выберите раздел для редактирования',
//    'modules' => $allModulesNames
//];
//echo $_GET['module'];
if(isset($_GET['module'])){
    require_once LIB_DIR. $_GET['module'] . '_admin.php';
    echo $_GET['module'];
} else {
    require_once TPL_DIR. 'index_admin.php';
}
//$module = $_GET['module'];

