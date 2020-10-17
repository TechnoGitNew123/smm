<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin_css.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page " style="background-image: linear-gradient(to right, #9c0483, #730bbe);" >
<div class="login-new" style="width:600px;">
  <div class="login-logo ">
    <span class="login-box-msg"> <img src="<?php echo base_url(); ?>assets/images/website/logo.png"> </span>
    <!-- <br><i class="fas fa-hospital-alt"></i> -->
  </div>
  <!-- /.login-logo -->
  <div class="card">

    <div class="card-body login-card-body pt-5">
      <h4 class="text-center mb-3">Signup</h4>
      <!-- <p class="login-box-msg">Login </p> -->
      <form class="input_form" method="post" action="">
        <div class="row ">

          <div class="form-group col-md-12">
            <label>Name of Reseller/Company</label>
            <input type="text" class="form-control form-control-sm" name="reseller_name" id="reseller_name" value="" placeholder="Enter Name of Reseller/Company" required="">
          </div>
          <div class="form-group col-md-6">
            <label>Name Mobile</label>
            <input type="number" min="5555555555" max="9999999999" step="1" class="form-control form-control-sm" name="reseller_mobile" id="reseller_mobile" value="" placeholder="Enter Mobile No." required="">
          </div>
          <div class="form-group col-md-6">
            <label>Name Email</label>
            <input type="email" class="form-control form-control-sm" name="reseller_email" id="reseller_email" value="" placeholder="Enter Email Id" required="">
          </div>

          <div class="form-group col-md-6">
            <label>Password</label>
            <input type="password" class="form-control form-control-sm password" name="reseller_password" id="reseller_password" value="" placeholder="Enter Password" required="">
          </div>
          <div class="form-group col-md-6">
            <label>Confirm Password</label>
            <input type="password" class="form-control form-control-sm con_password" id="reseller_c_password" value="" placeholder="Confirm Password" required="">
          </div>

          <div class="form-group col-md-6 select_sm">
            <label>Reseller Category</label>
            <select class="form-control form-control-sm select2" name="reseller_category_id" id="reseller_category_id" data-placeholder="Select Category" required >
              <option value="">Select Category</option>
              <?php if(isset($reseller_category_list)){ foreach ($reseller_category_list as $list) { ?>
              <option value="<?php echo $list->reseller_category_id; ?>" <?php if(isset($reseller_info) && $reseller_info['reseller_category_id'] == $list->reseller_category_id){ echo 'selected'; } if($list->reseller_category_status == 0){ echo ' disabled'; } ?>><?php echo $list->reseller_category_name; ?></option>
              <?php } } ?>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label>Country</label>
            <select class="form-control select2 form-control-sm" name="country_id" id="country_id" data-placeholder="Select Country" required >
              <option value="">Select Country</option>
              <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
              <option value="<?php echo $list->country_id; ?>" <?php if(isset($reseller_info) && $reseller_info['country_id'] == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
              <?php } } ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>State</label>
            <select class="form-control select2 form-control-sm" name="state_id" id="state_id" data-placeholder="Select State" required >
              <option value="">Select State</option>
              <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
              <option value="<?php echo $list->state_id; ?>" <?php if(isset($reseller_info) && $reseller_info['state_id'] == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
              <?php } } ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>City</label>
            <select class="form-control select2 form-control-sm" name="city_id" id="city_id" data-placeholder="Select City" required >
              <option value="">Select City</option>
              <?php if(isset($city_list)){ foreach ($city_list as $list) { ?>
              <option value="<?php echo $list->city_id; ?>" <?php if(isset($reseller_info) && $reseller_info['city_id'] == $list->city_id){ echo 'selected'; } ?>><?php echo $list->city_name; ?></option>
              <?php } } ?>
            </select>
          </div>
        </div>

        <!-- <span class="text-red"> <?php echo form_error('password'); ?> </span> -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div >
              <button type="submit" class="btn btn-primary btn-flat">Sign Up</button>
            </div>
          </div>
        </div>
      </form>
      <!-- /.social-auth-links -->
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6 text-right">
          <p class="mb-1">
            <a href="<?php echo base_url(); ?>Login">Login</a>
          </p>
        </div>
      </div>

      <div class="alert alert-danger p-2 msg_invalid" style="display:none" role="alert">
        Invalid Information
      </div>
      <div class="alert alert-danger p-2 mobile_exist" style="display:none" role="alert">
        This Mobile Number Already Exist.
      </div>

    </div>
    <!-- /.login-card-body -->
  </div>

  <div class="alert alert-danger p-2 con_pass_error" style="display:none" role="alert">
    Password and Confirm Password must be same
  </div>


</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script> -->
<script type="text/javascript">
<?php if($this->session->flashdata('msg')){ ?>
  $(document).ready(function(){
    $('.msg_invalid').show().delay(5000).fadeOut();
  });
<?php } ?>
</script>

<script type="text/javascript">
  // Check Mobile Duplication..
  var reseller_mobile1 = $('#reseller_mobile').val();
  $('#reseller_mobile').on('change',function(){
    var reseller_mobile = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>Reseller/Res_Master/check_duplication',
      type: 'POST',
      data: {"column_name":"reseller_mobile",
             "column_val":reseller_mobile,
             "table_name":"smm_reseller"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#reseller_mobile').val(reseller_mobile1);
          $('.mobile_exist').show().delay(5000).fadeOut();
          // toastr.error(reseller_mobile+' Mobile Number Exist.');
        }
      }
    });
  });

  // Check Email Duplication..
  var reseller_email1 = $('#reseller_email').val();
  $('#reseller_email').on('change',function(){
    var reseller_email = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>Reseller/Res_Master/check_duplication',
      type: 'POST',
      data: {"column_name":"reseller_email",
             "column_val":reseller_email,
             "table_name":"smm_reseller"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#reseller_email').val(reseller_email1);
          toastr.error(reseller_email+' Email No Exist.');
        }
      }
    });
  });

  $('.password, .con_password').on('change',function(){
    var password = $('.password').val();
    var con_password = $('.con_password').val();
    if(password != con_password){
      $('.con_pass_error').show().delay(5000).fadeOut();

      // toastr.error('Password and Confirm Password must be same');
      $('.con_password').val('');
    }
  });

  $("#country_id").on("change", function(){
    var country_id =  $('#country_id').find("option:selected").val();
    $.ajax({
      url:'<?php echo base_url(); ?>Reseller/Res_Master/get_state_by_country',
      type: 'POST',
      data: {"country_id":country_id},
      context: this,
      success: function(result){
        $('#state_id').html(result);
      }
    });
  });

  $("#state_id").on("change", function(){
    var state_id =  $('#state_id').find("option:selected").val();
    $.ajax({
      url:'<?php echo base_url(); ?>Reseller/Res_Master/get_city_by_state',
      type: 'POST',
      data: {"state_id":state_id},
      context: this,
      success: function(result){
        $('#city_id').html(result);
      }
    });
  });

  $('#reseller_password, #reseller_c_password').on('change',function(){
    var reseller_password = $('#reseller_password').val();
    var reseller_c_password = $('#reseller_c_password').val();
    if(reseller_password != reseller_c_password){
      toastr.error('Password and Confirm Password must be same');
      $('#reseller_c_password').val('');
    }
  });

</script>
</body>
</html>
