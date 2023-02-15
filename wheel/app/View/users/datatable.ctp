<link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/dist/css/adminlte.min.css">

  <script src="<?php echo $baseurl; ?>/app/webroot/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="<?php echo $baseurl; ?>/app/webroot/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $baseurl; ?>/app/webroot/dist/js/demo.js"></script>
<div class="container-fluid">
        <div class="row mb-2">
 <a href="<?php echo $baseurl; ?>students/index" class="nav-link">Home</a>
 </div></div>




<table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                <tr style='background-color:#fff;'>
<th style="text-align:center">WHEEL NAME</th>
<th style="text-align:center">department</th>
<th style="text-align:center">section</th>
<th style="text-align:center">create date</th>
<th style="text-align:center">last modified date</th>
                  
                </tr>
                </thead>
               <tbody>
               <?php
  
      

                    foreach( $students as $student ){

                        echo "<tr>";
                        echo "<td style=text-align:center'>{$student['Wheel']['name']}</td>";
      
                        echo "<td style='text-align:center'>{$student['Box']['title']}</td>";
                        echo "<td style='text-align:center'>{$student['Location']['title']}</td>";
                    
                        echo "<td style='text-align:center'>{$student['Wheel']['created']}</td>"; 
                        echo "<td style='text-align:center'>{$student['Wheel']['modified']}</td>"; 
                        echo "</tr>";
                    }
                ?> 
                </tbody>
               
              </table>


<div class='col-lg-12' style='text-align:center'>
    
    <?php echo $this->Element('admin/pagination'); ?>
</div>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>

    





