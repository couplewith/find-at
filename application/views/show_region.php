<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show :: Region List</title>
</head>
<body>

<div id="container">
    <h1> 지역  등록 현황 !</h1>

    <div id="body">
<?php
            $phpgrid->enable_edit("FORM", "CRUD"); 
            $phpgrid->display();

// http://phpgrid.com/example/edit-datagrid/
?>
    </div>

</div>

</body>
</html>
