<h3><?php echo $title; ?></h3>
<script>
function get_page(strurl){
 jQuery.ajax({
      type: "get",
      url : strurl,
      success:function(data){
        $( "#main_page").html(data);
        $( "#message").html("load Success!!");
      },
      error : function(err) {
        $( "#message").html( err );
        $( "#message").html("load Faile!!");
      }
    });
}
</script>

<ul class="nav nav-tabs">
<?php
   foreach( $example["links"] as $key => $value) {
        print "<li><a href=\"#\" onClick=\"javascript:get_page('$value');\"> $key:$value </a> </li>";
   }
?>
</ul>
<div id="main_page">
<div id="message">

