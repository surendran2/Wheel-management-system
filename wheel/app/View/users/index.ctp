<h3>My Wheels and Tires</h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    
  

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo $baseurl; ?>users/index" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
          <a href="<?php echo $baseurl; ?>users/wheel_add" class="nav-link">Add</a>
          <?php
          // echo $this->Html->link( 'New User', array( 'action' => 'add' ,'class'=>'nav-link') ); 
          ?>
          </li>
          
            
        </ul>

        <!-- SEARCH FORM -->
        
      </div>

      <!-- Right navbar links -->
      <!--  -->
    
  </nav>







  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="info">
      <img src="<?php echo $baseurl; ?>/app/webroot/dist/img/download.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 100%; height:80%">
   
          <a href="#" class="d-block" style="text-align:center">My project</a>
        </div>
        
  
        <div class="info">
     
   
          <a href="<?php echo $baseurl; ?>users/box" class="d-block" style="text-align:center">Add Box</a>
        </div>
        <div class="info">
     
   
          <a href="<?php echo $baseurl; ?>users/location" class="d-block" style="text-align:center">Add Location</a>
        </div>
        
   
  
   <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
      </div>

     
      <!-- Sidebar Menu -->
     
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          </select>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            
              <!-- /.card-header -->
              <table id='table' style='padding:5px;'>
    <!-- table heading -->
   
    <table id="dataTable" class="table table-bordered table-hover">
    <thead>
                <tr>
                <tr style='background-color:#fff;'>


        
      <th style="text-align:center">Name of the wheel</th>
        <th style="text-align:center">Box</th>
        <th style="text-align:center">Location</th>
        <th style="text-align:center">create date</th>
        <th style="text-align:center">last modified date</th>
        <th style="text-align:center">Action</th>
        
    </tr>
    </thead>
    <tbody>
	<?php
  
      


          //  exit;
        
    //loop to show all retrieved records
    foreach( $wheel as $wheels ){

            echo "<tr>";
            echo "<td style='text-align:center'>{$wheels['Wheel']['name']}</td>";
         
            echo "<td style='text-align:center'>{$wheels['Box']['name']}</td>";
            echo "<td style='text-align:center'>{$wheels['Location']['name']}</td>";
           
            echo "<td style='text-align:center'>{$wheels['Wheel']['created']}</td>"; 
            echo "<td style='text-align:center'>{$wheels['Wheel']['modified']}</td>"; 
            echo "<td class='actions'>";
           
                 echo $this->Html->link( 'Edit', array('action' => 'wheel_edit', $wheels['Wheel']['id']) );
              
                echo $this->Form->postLink( 'Delete', array(
                  'action' => 'wheel_delete', 
                  $wheels['Wheel']['id']), array(
                      'confirm'=>'Are you sure you want to delete that Wheel details?' ) );
                         ?>
                       <a target="_blank" href="<?php echo $baseurl; ?>users/pdf_print/<?php echo $wheels['Wheel']['id']; ?>" class="sepV_a" title="<?php echo __('Edit Workshop'); ?>">
                                                <i class="fa fa-print"></i></a>
                                                <!-- $this->Html->link('Excel file', ['ext' => 'xlsx']); -->
                      <a target="_blank" href="<?php echo $baseurl; ?>users/export/<?php echo $wheels['Wheel']['id']; ?>" class="sepV_a" title="<?php echo __('Excel'); ?>">
                                                <i class="fa fa-file-excel"></i></a>

                      <?php
            echo "</td>";
        echo "</tr>";
    }
?>
     </tbody>

</table>

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
<!-- AdminLTE App -->
<script src="<?php echo $baseurl; ?>/app/webroot/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $baseurl; ?>/app/webroot/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>
</body>
</html>
