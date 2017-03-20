<!-- start of body -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
    <style type="text/css">
            #form-holder {        
                width:100%;
                display:block;
                display: none;
            }
            #form-holder {
                border-radius: 7px;
                background:#6b6a63;
                margin:30px auto 0;
                padding:6px;
                position:absolute;
                width:600px;
                top: 50%;
                left: 50%;
                margin-left: -300px; /* 1/2 width*/
                margin-top: -40px; /* 1/2 height*/
            }
           td.description > p { width: 200px; word-break: break-all; color:red; }
           td { white-space: normal; }
    </style>

<div class="panel-body">
</div>

<h2><?php echo $title; ?></h2>
<?php
$DEBUG=0;

$thead = array (
        "pid" => "ID",
        "region_gid" => "지역번호",
        "region_name" => "지역명",
        "region_sido" => "시도",
        "region_addr" => "상세주소",
        "poi_name" => "위치이름",
        "poi_desc" => "위치설명",
        "poi_link" => "위치링크",
        "map_type" => "지도형식",
        "map_id" => "지도번호",
        "map_level" => "지도레벨",
        "geo_lat" => "위도",
        "geo_long" => "경도",
        "reg_date" => "등록일",
        "status" => "상태");

  $t_head_str = "";
  foreach ($thead as $key => $value)
  {
    $t_head_str .= "<th> $value</th>";
  }
  if($DEBUG) print_r($t_head_str);

?>
<div class="container">
        <button id="add-button">Add New Contact</button>
        <div class="table-responsive">
        <table id="poi" class="table table-hover" cellspacing="0" >
            <thead>
                <tr>
                   <?php
                          echo "$t_head_str";
                   ?>
                </tr>
            </thead>
            <tfoot>
                <tr>
                   <?php
                          echo "$t_head_str";
                   ?>
                </tr>
            </tfoot>
            <tbody>
<?php

                foreach ($pois as $row) {
                    echo <<<TB
                <tr>
                     <td> ${row['pid']} </td>
                     <td> ${row['region_gid']} </td>
                     <td> ${row['region_name']} </td>
                     <td> ${row['region_sido']} </td>
                     <td class="description"> ${row['region_addr']} </td>
                     <td> ${row['poi_name']} </td>
                     <td class="description"><p>${row['poi_desc']}</p></td>
                     <td class="description"><p>${row['poi_link']}</p></td>
                     <td> ${row['map_type']} </td>
                     <td> ${row['map_id']} </td>
                     <td> ${row['map_level']} </td>
                     <td> ${row['geo_lat']} </td>
                     <td> ${row['geo_long']} </td>
                     <td> ${row['reg_date']} </td>
                     <td> ${row['status']} </td>
                     <td> <button class="edit-button" id="${row['pid']}"> Edit</button>
                          <button class="delete-button" id="${row['pid']}"> Delete</button>
                     </td>
                     <td>
                          <button class="goregion-button" id="${row['region_gid']}"> Delete</button>
                     </td>
                </tr>
TB;
                }
?>
            </tbody>
        </table>
        </div>
</div>
 
        <div id="form-holder">
            <div id="dialog-form" title="Add New Poi">
                <p>
                    All form fields are required.  
                </p>
                <form id="contact-form">  
                    <fieldset>
                        <label for="contact_name">  
                            Contact Name
                        </label>  
                        <input type="text" name="contact_name" id="contact_name" value="" /><br/> 
                        <label for="Productdesc">  
                            Contact Address
                        </label>  
                        <textarea name="contact_address" id="contact_address"></textarea><br/>
                        <label for="Price">  
                            Contact Phone  
                        </label>  
                        <input type="text" name="contact_phone" id="contact_phone" value="" />
                        <br/>
                        <input type="submit" id="add-contact" value="Add Contact" />
                        &nbsp;
                        <button id="close-button">Close</button>
                    </fieldset>  
                </form>  
            </div>
        </div>
<div class="panel-body2">
</div> <!-- endof body -->
