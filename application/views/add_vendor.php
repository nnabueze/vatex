<?php
include('header.php');
include('sidebar.php');
?>

<!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-cogs"></i> Vendor Information</h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.html">Dashboard</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Vendors</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Create New Vendor</li>
                        </ol>
                    </div><!-- /.breadcrumb-wrapper -->
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="body-content animated fadeIn">

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                        	<div class="panel rounded shadow no-overflow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Create New Vendor Form</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body no-padding">
                                    
                                        <div class="form-body">
                                            
                                        <div class="form-group form-group-divider">
                                            <div class="form-inner">
                                                <h5 class="no-margin">Basic Information</h5>
                                            </div>
                                        </div><!-- /.form-group -->

<form id="smart-form-register" name="smart-form-register" class="form-horizontal form-bordered"  method="post" action ="<?php echo site_url('vendor/add_vendor');?>" enctype="multipart/form-data">
					
										
							<?php if($this->session->flashdata('error')!=''){
								echo '<div><p style="color:red;">'.$this->session->flashdata('error').'</p></div>';								
							}
							if($this->session->flashdata('success')!=''){
								echo '<div><p style="color:green;">'.$this->session->flashdata('success').'</p></div>';
							}
							?>							
							<input type="hidden" name="ec_id" value="<?php echo $userdt[0]->id;?>">
							<div class="form-group">
                                 <label class="col-sm-3 control-label">Select Vendor</label>
                                   <div class="col-md-6">
										<select name="vendor_id">
											<option value="">Select Vendor</option>
											<?php $vecid = $this->vendor_model->vendor_to_ec_id();
											foreach($vecid as $ved){
												echo '<option value="'.$ved->vendor_id.'">'.$ved->vendor_id.'</option>';
											}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
                                 <label class="col-sm-3 control-label">Email</label>
                                   <div class="col-md-6">
										<input type="email" name="email" placeholder="Email address" value="" >
									</div>
							</div>

							<div class="form-group">
                                 <label class="col-sm-3 control-label">User Name</label>
                                   <div class="col-md-6">
										<input type="text" name="username" placeholder="User Name" value="" >
									</div>
							</div>

							<div class="form-group">
                                 <label class="col-sm-3 control-label">Password</label>
                                   <div class="col-md-6">
										<input type="password" name="password" placeholder="Password" id="password">
									</div>	
							</div>

							<div class="form-group">
                                 <label class="col-sm-3 control-label">Confirm Password</label>
                                   <div class="col-md-6">
									<input type="password" name="passwordConfirm" placeholder="Confirm password">
								   </div>
							</div>
							
							
							<div class="form-group form-group-divider">
                                            <div class="form-inner">
                                                <h5 class="no-margin">Contact Information</h5>
                                            </div>
                                        </div><!-- /.form-group -->
                                        
							<div class="form-group">
                                 <label class="col-sm-3 control-label">First Name</label>
                                   <div class="col-md-6">
										<input type="text" name="firstname" placeholder="First name" value="" >
									</div>
							</div>							
							<div class="form-group">
                                 <label class="col-sm-3 control-label">Last Name</label>
                                   <div class="col-md-6">
										<input type="text" name="lastname" placeholder="Last name" value="" >
									</div>
							</div>
							<div class="form-group">
                                 <label class="col-sm-3 control-label">Prime Business Contact</label>
                                   <div class="col-md-6">
										<input type="text" name="pbcontact" placeholder="Prime Business Contact" value="" >
									</div>
							</div>
							<div class="form-group">
                                 <label class="col-sm-3 control-label">Phone Number</label>
                                   <div class="col-md-6">
										<input type="text" name="mobile" placeholder="Phone Number" value="">
								</div>
							</div>
							<div class="form-group">
                                 <label class="col-sm-3 control-label">
											Profile Image
                            			</label>
							<div class="col-md-6">
										<input type="file" name="pimg" placeholder="Profile Image" value="" ><b class="tooltip tooltip-bottom-right">Please choose your profile image</b>
							</div>
						</div>
						<div class="form-footer">
                                            <div class="col-sm-offset-3">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div><!-- /.form-footer -->


                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->

                </div><!-- /.body-content -->
                <!--/ End body content -->




<?php include('footer.php');?>		
<!-- START @PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets/main/assets/global/plugins/bower_components/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/main/assets/global/plugins/bower_components/datatables/js/dataTables.bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('assets/main/assets/global/plugins/bower_components/datatables/js/datatables.responsive.js'); ?>"></script>
<!--/ END PAGE LEVEL PLUGINS -->


<!-- START @PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/main/assets/admin/js/apps.js'); ?>"></script>
<script src="<?php echo base_url('assets/main/assets/admin/js/pages/blankon.table.js'); ?>"></script>
<script src="<?php echo base_url('assets/main/assets/admin/js/demo.js'); ?>"></script>
<!--/ END PAGE LEVEL SCRIPTS -->
<!--/ END JAVASCRIPT SECTION -->
