<!--sidebar end-->
<!--main content start-->
<div class="main-content">
<div class="page-content">
    <div class="container-fluid">
                <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0"> Case List</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo lang('home'); ?></a></li>
                                        <li class="breadcrumb-item"> <?php echo lang('patient'); ?></li>
                                        <li class="breadcrumb-item active">Case List</li>
                                        
                                       
                                        
                                    </ol>
                                </div>

                                </div>
                            </div>
                        </div>
        <!-- page start-->
         <link href="common/extranal/css/patient/case_list.css" rel="stylesheet">
         <div class="row">
        <section class="col-md-5">
            <div class="card">
            <div class="card-header table_header">
                                        <h4 class="card-title mb-0 col-lg-12"> <?php echo lang('add'); ?> <?php echo lang('case'); ?> </h4> 
                                      
                                    </div>
           

            <div class="card-body"> 
                <form role="form" action="patient/addMedicalHistory" class="clearfix" method="post" enctype="multipart/form-data">
                <div class=" row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('date'); ?> &ast;</label>
                        <input type="text" class="form-control form-control-inline input-medium default-date-picker" name="date"  value='' placeholder="" autocomplete="off" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('patient'); ?> &ast;</label>
                        <select class="form-control m-bot15" id="patientchoose" name="patient_id" value='' required="">

                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?> &ast;</label>
                        <input type="text" class="form-control form-control-inline input-medium" name="title"  value='' placeholder="" required="ffsdfs">
                    </div>
                    <div class="form-group col-md-12 no-print">
                        <label class=""><?php echo lang('case'); ?> &ast;</label>
                        <textarea class="form-control ckeditor" name="description" id="editor1" value="" rows="70" cols="70" required=""></textarea>
                    </div>
                </div>
                    <input type="hidden" name="redirect" value='patient/caseList'>
                    <section class="col-md-12 no-print pull-right">
                        <button type="submit" name="submit" class="btn btn-info submit_button pull-right"><?php echo lang('submit'); ?></button>
                    </section>
                </form>
            </div>
            </div>
        </section>


        <section class="col-md-7 no-print">
        <div class="card">
            <div class="card-header table_header">
                                        <h4 class="card-title mb-0 col-lg-12">  <?php echo lang('all'); ?> <?php echo lang('case'); ?> </h4> 
                                      
                                    </div>
           
           
            <div class="card-body"> 

            <div class="table-responsive adv-table">
                                            <table class="table mb-0" id="editable-sample">
                        <thead>
                            <tr>
                                <th class="table_head"><?php echo lang('date'); ?></th>
                                <th class="table_head1"><?php echo lang('patient'); ?></th>
                                <th class="table_head1"><?php echo lang('case'); ?> <?php echo lang('title'); ?></th>
                                <th  class="table_head no-print"><?php echo lang('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>

    </div>



    </section>
    <!-- page end-->
</div>
</div>
</div>
<!--main content end-->
<!--footer start-->






<!-- Add Case Modal-->
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                
                <h5 class="modal-title"><?php echo lang('add_medical_history'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          
            <div class="modal-body row">
                <form role="form" action="patient/addMedicalHistory" class="clearfix" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('date'); ?> &ast;</label>
                        <input type="text" class="form-control form-control-inline input-medium default-date-picker" name="date"  value='' placeholder="" readonly="" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('patient'); ?> &ast;</label>
                        <select class="form-control m-bot15 js-example-basic-single" name="patient_id" value='' required="">
                            <?php foreach ($patients as $patient) { ?>
                                <option value="<?php echo $patient->id; ?>"> <?php echo $patient->name; ?> </option> 
                            <?php } ?> 
                        </select>
                    </div>
                            </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?> &ast;</label>
                        <input type="text" class="form-control form-control-inline input-medium" name="title"  value='' placeholder="" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo lang('description'); ?> &ast;</label>
                        <textarea class="ckeditor form-control" name="description" value="" rows="10" required></textarea>
                    </div>
                    <input type="hidden" name="id" value=''>
                    <input type="hidden" name="redirect" value='patient/caseList'>
                    <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-info submit_button"><?php echo lang('submit') ?></button>
                                                            </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add Case Modal-->

<!-- Edit Case Modal-->
<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                
                <h5 class="modal-title"><?php echo lang('edit_medical_history'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body row">
                <form role="form" id="medical_historyEditForm" class="clearfix" action="patient/addMedicalHistory" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('date'); ?> &ast;</label>
                        <input type="text" class="form-control form-control-inline input-medium default-date-picker" name="date"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('patient'); ?> &ast;</label>
                        <select class="form-control m-bot15 patient" id="patientchoose1" name="patient_id" value='' required="">

                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?> &ast;</label>
                        <input type="text" class="form-control form-control-inline input-medium" name="title"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo lang('description'); ?> &ast;</label>
                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor" name="description" value="" rows="10" required=""></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="id" value=''>
                    <input type="hidden" name="redirect" value='patient/caseList'>
                    <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-info submit_button"><?php echo lang('submit') ?></button>
                                                            </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>






<div class="modal fade" id="caseModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                
                <h5 class="modal-title"> <?php echo lang('case'); ?> <?php echo lang('details'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
           
            <div class="modal-body row">
                <form role="form" id="medical_historyEditForm" class="clearfix" action="patient/addMedicalHistory" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 row">
                        <div class="form-group col-md-6 case_date_block">
                            <label for="exampleInputEmail1"><?php echo lang('case'); ?> <?php echo lang('creation'); ?> <?php echo lang('date'); ?></label>
                            <div class="case_date"></div>
                        </div>
                        <div class="form-group col-md-6 case_patient_block">
                            <label for="exampleInputEmail1"><?php echo lang('patient'); ?></label>
                            <div class="case_patient"></div>
                            <div class="case_patient_id"></div>
                        </div> 
                        <div>
                            <hr>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?> </label>
                        <div class="case_title"></div>
                        <hr>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"> <?php echo lang('details'); ?></label>
                        <div class="case_details"></div>
                        <hr>
                    </div>


                    <div class="col-md-12">
                        <h6 class="pull-right">
                            <?php echo $settings->title . '<br>' . $settings->address; ?>
                        </h6>
                    </div>


                    <div class="panel col-md-12 no-print">
                        <a class="btn btn-soft-info invoice_button btn-xs pull-right" onclick="javascript:window.print();"><i class="fa fa-print"></i> <?php echo lang('print'); ?> </a>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<?php
$current_user = $this->ion_auth->get_user_id();
if ($this->ion_auth->in_group('Doctor')) {
    $doctor_id = $this->db->get_where('doctor', array('ion_user_id' => $current_user))->row()->id;
}
?>

<script src="common/js/codearistos.min.js"></script>
<script type="text/javascript">var select_patient = "<?php echo lang('select_patient'); ?>";</script>
<script type="text/javascript">var language = "<?php echo $this->language; ?>";</script>
<script src="common/extranal/js/patient/case_list.js"></script>