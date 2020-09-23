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
            <h4>Invoice</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List All Invoice</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <!-- <th class="wt_50">Action</th> -->
                    <th class="wt_50">Invoice No</th>
                    <th class="">Reseller</th>
                    <th class="">Project</th>
                    <th class="wt_75">Date</th>
                    <!-- <th class="wt_75">Basic Amt</th> -->
                    <!-- <th class="wt_75">GST Amt</th> -->
                    <th class="wt_75">Total Amt</th>
                    <th class="wt_50">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($invoice_list)){
                    $i=0; foreach ($invoice_list as $list) { $i++;
                      $reseller_info = $this->Master_Model->get_info_arr_fields3('reseller_name', '', 'reseller_id', $list->reseller_id, '', '', '', '', 'smm_reseller');
                      $project_info = $this->Master_Model->get_info_arr_fields3('project_name', '', 'project_id', $list->project_id, '', '', '', '', 'smm_project');
                    ?>
                      <tr>
                        <td class="d-none"><?php echo $i; ?></td>
                        <!-- <td>
                          <div class="btn-group">
                            <a href="<?php echo base_url() ?>Finance/edit_invoice/<?php echo $list->invoice_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                            <a href="<?php echo base_url() ?>Finance/delete_invoice/<?php echo $list->invoice_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Invoice');"><i class="fa fa-trash text-danger"></i></a>
                          </div>
                        </td> -->
                        <td><?php echo $list->invoice_no; ?></td>
                        <td><?php if($reseller_info){ echo $reseller_info[0]['reseller_name']; } ?></td>
                        <td><?php if($project_info){ echo $project_info[0]['project_name']; } ?></td>
                        <td><?php echo $list->invoice_date; ?></td>
                        <!-- <td><?php echo $list->invoice_basic_amt; ?></td> -->
                        <!-- <td><?php echo $list->invoice_gst_amt; ?></td> -->
                        <td><?php echo $list->invoice_net_amt; ?></td>
                        <td>
                          <?php if($list->invoice_status == 0){ echo '<span class="text-danger">UnPaid</span>'; }
                            else{ echo '<span class="text-success">Paid</span>'; } ?>
                        </td>
                      </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

</body>
</html>