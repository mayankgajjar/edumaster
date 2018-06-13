<div class="page-content-wrapper">
<div class="page-content">
<!-- BEGIN STYLE CUSTOMIZER -->
<?php // echo $this->element('theme_customizer'); ?>
<!-- END STYLE CUSTOMIZER -->
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <ul class="page-breadcrumb breadcrumb">
            <li class="btn-group">
                <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Actions</span><i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="<?php echo Router::url(array('controller' => 'VehicleRoute', 'action' => 'index')) ?>">View All Vehicle Route</a>
                    </li>
                    <li>
                        <a href="<?php echo Router::url(array('controller' => 'VehicleRoute', 'action' => 'add')) ?>">Add New Vehicle Route</a>
                    </li>
                </ul>
            </li>
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Vehicle Route</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Add Vehicle Route</a>
            </li>
        </ul>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Session->flash('auth'); ?>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
<div class="col-md-12">

    <div class="portlet box blue-madison">
        <div class="portlet-title">
            <div class="caption">
                <span aria-hidden="true" class="icon-user"></span>&nbsp;Add Vehicle Route
            </div>
            <div class="tools">
                <a href="javascript:void(0);" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <?php echo $this->Form->create('VehicleRoute', array('class' => 'form-horizontal add', 'id' => 'VehicleRoute')); ?>
                <div class="form-body">
                    <div class="row">
         <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Vehicle Shift<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                    <?php echo $this->Form->input('SHIFT_ID', array('options' => $shift,
                                        'label' => FALSE_VALUE, 'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control select2me' , 'onchange' => 'select()' ,'id'=>'role','onchange' => 'showOptions(this)')); ?>	
                                </div>
                            </div>
                        </div>
						 <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Vehicle<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                    <?php echo $this->Form->input('VEHICLE_ID', array('options' => $vehicle,
                                        'label' => FALSE_VALUE, 'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control select2me' , 'onchange' => 'select()' ,'id'=>'role','onchange' => 'showOptions(this)')); ?>	
                                </div>
                            </div>
                        </div>
						</div>
						<div class="row">
						<div class="col-md-6">
						<div class="form-group">
                                <label class="control-label col-md-3">Vehicle Route<span class="required">
										* </span>
                                </label>
                               <div class="col-md-9 tooltips">
                                    <?php echo $this->Form->input('ROUTE_ID', array('options' => $route,
                                        'label' => FALSE_VALUE, 'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control select2me' , 'onchange' => 'select()' ,'id'=>'role','onchange' => 'showOptions(this)')); ?>	
                                </div>
                            </div>
						</div>
						
						<div class="col-md-6">
						<div class="form-group">
                                <label class="control-label col-md-3">Vehicle Route Name<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                    <?php echo $this->Form->input('VEHICLE_ROUTE_NAME', array('type' => 'text', 'label' => FALSE_VALUE,
                                        'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control','placeholder' => 'Example :- (Vehicle Route 1)')); ?>
                                </div>
                            </div>
						</div>
						</div>
						<div class="row">
						<div class="col-md-6">
						<div class="form-group">
                                <label class="control-label col-md-3">Select Driver<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                  <?php echo $this->Form->input('DRIVER_ID', array('options' => $driver,
                                        'label' => FALSE_VALUE, 'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control select2me')); ?>	
                                </div>
                            </div>
						</div>
						
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Status</label>
                                <div class="col-md-9 tooltips">
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="data[VehicleRoute][STATUS]" value="1" checked/>
                                            Active </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="data[VehicleRoute][STATUS]" value="0" />
                                            Inactive </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="form-actions fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn bg-blue-chambray">Submit</button>
                                <button type="button" class="btn default" onclick="window.location.href='<?php echo $this->request->referer(); ?>'">Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

</div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>