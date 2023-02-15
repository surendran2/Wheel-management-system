
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $baseurl; ?>/app/webroot/dist/css/adminlte.min.css">
</head>
<style>
     .datepicker table{
            width:100%;
        }
        .datepicker {
        display: block;
        box-shadow: rgba(0, 0, 0, 0.75) 0px 2px 14px -4px;
        border: 1px solid #eaeef3;
        top: 195px;
        left: 506.328px;
        z-index: 10;
        }
      </style>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    
  

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo $baseurl; ?>users/index" class="nav-link">Home</a>
          </li>
          
            
        </ul>

        <!-- SEARCH FORM -->
        
      </div>

      <!-- Right navbar links -->
      <!--  -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $baseurl; ?>/app/webroot/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $baseurl; ?>/app/webroot/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $baseurl; ?>/app/webroot/dist/js/demo.js"></script>
</body>
</html>
<div class='row'>
<div class='col-md-1'></div>
<div class='col-md-11'>
<h2>Add New wheel</h2>
  

<?php 
echo "<tr>";

                echo $this->Form->create('Wheel',array('enctype'=>'multipart/form-data','type'=>'post'));
                echo "<td>";
                echo $this->Form->input('name');
                echo "</td>";
                echo "<br/>";
                echo "<td>";
                
               // echo $this->Form->input('doc_date', array('type' => 'text', 'div' => false, 'label' => false, 'class' => 'form-control datepicker-here','data-date-format'=>'yyyy-mm-dd', 'id' => 'test'));
                echo "</td>";
                echo "<br/>";
                echo "<td>";
                $box = $this->Html->get_box();
                echo $this->Form->input('box_id', array('type' => 'select', 'label' => false,'div'=>false, 'class' => 'select2 form-control', 'empty' => 'Select Box', 'options' => $box, 'requried' => TRUE));
                echo "</td>";
                echo "<br/>";
                echo "<td>";
                $location = $this->Html->get_locataion();
                echo $this->Form->input('location_id', array('type' => 'select', 'label' => false,'div'=>false, 'class' => 'select2 form-control', 'empty' => 'Select Location', 'options' => $location, 'requried' => TRUE));
                echo "</td>";

                echo "<td>";

    echo "</td>";

    echo "<td>";
    echo $this->Form->end('Submit');
    echo "</td>";
    echo "<tr>";
?>
</div>
</div>
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


        // $('#test').datepicker({
        //     lang:'en',
        //     format:'y-m-d',
        //     formatDate:'y/m/d',
        //     minDate:'-1972/01'//yesterday is minimum date

        // });


  $('#doc_date').datepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y/m/d',
	minDate:'-1970/01/01', // yesterday is minimum date
	//maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
       // $('#datepicker1').datepicker('setDate', today);
        </script>





