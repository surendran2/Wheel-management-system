<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Project</title>

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
            <a href="<?php echo $baseurl; ?>students/index" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
          <a href="<?php echo $baseurl; ?>students/add" class="nav-link">Add</a>
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
      <img src="<?php echo $baseurl; ?>/app/webroot/dist/img/onlymytvs.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 100%; height:100%">
   
          <a href="#" class="d-block" style="text-align:center">My project</a>
        </div>
        <div class="info">
     
   
          <a href="<?php echo $baseurl; ?>students/index2" class="d-block" style="text-align:center">Deactivated Student List</a>
        </div>
  
        <div class="info">
     
   
          <a href="<?php echo $baseurl; ?>students/department" class="d-block" style="text-align:center">Add Department</a>
        </div>
        <div class="info">
     
   
          <a href="<?php echo $baseurl; ?>students/section" class="d-block" style="text-align:center">Add Section</a>
        </div>
        <div class="info">
     
   
     <a href="<?php echo $baseurl; ?>students/report" class="d-block" style="text-align:center">Student Admission Report</a>
   </div>
   

    <!-- Sidebar -->
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
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
           
              <div class="box box-primary box-primary-shadow">
                    <div class="box-header with-border">
                        <h3>Students Registration Report</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php
                        echo $this->Form->create('Student', array('action' => 'report', 'enctype' => 'multipart/form-data', 'method' => 'get'));
                        ?>
                        <?php echo $this->Session->flash(); ?>

                        <div class="row">
                            <div class="col-md-12">

                               
                                    <div class="form-group">
            <table>
                          <tr>
                              <td>
                                    <?php echo $this->Form->input('fromDate', array('type' => 'text', 'div' => false, 'label' => false, 'class' => 'form-control datepicker', 'requried' => TRUE)); ?>
                                        <label class="material-form-field-label"><span style="color:red">*</span><?php echo __('From date'); ?> :</label>
</td>
<td>
                                        <?php echo $this->Form->input('endDate', array('type' => 'text', 'div' => false, 'label' => false, 'class' => 'form-control datepic', 'requried' => TRUE)); ?>
                                        <label class="material-form-field-label"><span style="color:red">*</span><?php echo __('To date'); ?> :</label>
</td>
</tr>
</table>
</div>
                                </div>
                                


                                


                            </div>
             


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" id="myButton" data-loading-text="Loading..." class="btn btn-info pull-right"><?php echo __('Download'); ?></button>
                        <span id="errorskms" style="color:red"></span>
                    </div>



                    <?php echo $this->Form->end(); ?>
                </div>
                <!-- /.box -->

                <!-- Form Element sizes -->




            </div>

        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script src="<?php echo $baseurl; ?>/app/webroot/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/jquery-ui/jquery-ui.css"></script>

<!-- date-range-picker -->

<link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      <script src="<?php echo $baseurl; ?>/app/webroot/plugins/daterangepicker/daterangepicker.js"></script>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>

<script>
   
  $('#StudentFromDate').datepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y/m/d'
});
$('#StudentEndDate').datepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y/m/d'
 
});
</script>
<script>

function get_products(id)
 {
       var quantity = $('#quantity'+id).val();

// alert('quantity');
  

    var rate1 = $('#rate'+id).val();
    var tot = quantity * rate1;

    $('#total'+id).val(tot);
 
  

       
}


  </script>
</body>
</html>
