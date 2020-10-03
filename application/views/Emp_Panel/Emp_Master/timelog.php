<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Timelog</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
           <?php include('project_menu.php'); ?>
        </div>         
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Timelog</h3>
                <div class="card-tools">
                  <!-- <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } ?> -->
                </div>
              </div>
              <!--  -->
              <div class="card-body p-0" >
                <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                  <div class="row p-4">

                    <div class="col-md-8">
                      <div class="card p-4">
                      <div class="row">
                        <div class="form-group col-md-4 ">
                            <label>Employee</label>
                            <input type="text" class="form-control form-control-sm" name="old_password" id="old_password" value="John Smith" placeholder="Employee" disabled="">
                          </div>

                           <div class="form-group col-md-2 ">
                            <label>Start Time</label>
                            <input type="text" class="form-control form-control-sm" name="old_password" id="old_password" value="John Smith" placeholder="Start Time" disabled="">
                          </div>

                           <div class="form-group col-md-2 ">
                            <label>End Time</label>
                            <input type="text" class="form-control form-control-sm" name="old_password" id="old_password" value="John Smith" placeholder="End Time" disabled="">
                          </div>

                           <div class="form-group col-md-2 ">
                            <label>Start Date</label>
                            <input type="text" class="form-control form-control-sm" name="old_password" id="old_password" value="John Smith" placeholder="Start Date" disabled="">
                          </div>

                           <div class="form-group col-md-2 ">
                            <label>End Date</label>
                            <input type="text" class="form-control form-control-sm" name="old_password" id="old_password" value="John Smith" placeholder="End Date" disabled="">
                          </div>

                           <div class="form-group col-md-12">
                              <label>Memo</label>
                              <textarea class="form-control" rows="3" placeholder="Enter Memo" disabled=""></textarea>
                            </div>



                          

                          
                          <div class="col-md-12">
                            <button class="btn btn-sm btn-success float-right px-4">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                       <?php include('project_details.php'); ?>
                    </div>
                   
   
                  </div>
                  
                </form>
              </div>
            </div>

            
          </div>

      </div>
    </section>
  </div>

</body>
</html>