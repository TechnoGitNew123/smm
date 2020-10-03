<!DOCTYPE html>
<html>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <h4>Attendance</h4>
          </div>
             <div class="col-md-4 col-6">
            <a href="<?php echo base_url(); ?>Emp_Panel/Emp_Master/employee">
              <div class="info-box">
                <span class="info-box-icon text-success"><i class="far fa-clock"></i></span>
                <div class="info-box-content">                 
                  <span class="info-box-number text-primary f-16">Attendance</span>
                   <span class="info-box-text text-secondary">Attendance All</span>
                </div>
              </div>
            </a>
          
          </div>

           <div class="col-md-4 col-6">
            <a href="<?php echo base_url(); ?>Emp_Panel/Emp_Master/employee">
              <div class="info-box">
                <span class="info-box-icon text-success"><i class="far fa-calendar-alt"></i></span>
                <div class="info-box-content">                 
                  <span class="info-box-number text-primary f-16">Monthly Timesheet</span>
                   <span class="info-box-text text-secondary">View All</span>
                </div>
              </div>
            </a>
          
          </div>

           <div class="col-md-4 col-6">
            <a href="<?php echo base_url(); ?>Emp_Panel/Emp_Master/employee">
              <div class="info-box">
                <span class="info-box-icon text-success"><i class="far fa-clock"></i></span>
                <div class="info-box-content">                 
                  <span class="info-box-number text-primary f-16">Overtime Request</span>
                   <span class="info-box-text text-secondary">Add Overtime Request</span>
                </div>
              </div>
            </a>
          
          </div>
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
           
           
            <div class="card-body">
              <form class="form-horizontal" autocomplete="off" method="post">
                <div class="form-group row">
                 <div class="col-md-12">
                    <label class=""> Date</label>
                 </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control from_date" name="from_date" id="date1" data-target="#date1" data-toggle="datetimepicker">
                    <label class="text-red">  </label>
                  </div>

                  <div class="col-sm-4">
                     <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="button">Get</button>
                    </div>
                  </div>
                
                </div>
               
              </form>
             
             <div class="row">
              <div class="col-sm-8"> <h6 class="">Daily Attendance Report</h6> </div>
               <div class="col-sm-4"> <h5> <a href="#">  <span class="badge badge-primary"> <i class="fas fa-plus ml-2 mr-2"></i> Date Wise Attendance</span></a> </h5>  </div>
               
             </div>
             
                <hr>
                <table id="example1" class="table table-bordered table-striped scroll" >
                  <thead>
                  <tr>
                    <th>Employee</th>
                    <th>Employee Id</th>
                    <th>Company </th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                    <th>Late </th>
                     <th>Early Leaving</th>
                    <th>Overtime</th>
                    <th>Total Work </th>                    
                  </tr>
                  </thead>
                  <tbody>
              
                </table>
                <br>
                
             
            </div>
          </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

    
  </div>

</body>
</html>
