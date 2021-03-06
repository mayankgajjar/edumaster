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
                        <a href="<?php echo Router::url(array('controller' => 'EventWinner', 'action' => 'index')) ?>">View All Event Winners</a>
                    </li>
                    <li>
                        <a href="<?php echo Router::url(array('controller' => 'EventWinner', 'action' => 'add')) ?>">Add New Event Winner</a>
                    </li>
                </ul>
            </li>
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Event Winner</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Add Event Winner</a>
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
                <span aria-hidden="true" class="icon-user"></span>&nbsp; Add Event Winner
            </div>
            <div class="tools">
                <a href="javascript:void(0);" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <?php echo $this->Form->create('EventWinner', array('class' => 'form-horizontal add', 'id' => 'Roles')); ?>
			<?php echo $this->Form->input("WINNER_ID", array('type' => 'hidden', 'label' => false, 'div' => false)) ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Event Name<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                    <?php echo $this->Form->input('EVENT_ID', array('options' => $event,
                                        'label' => FALSE_VALUE, 'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control select2me' , 'onchange' => 'fn_showStudents(this)' ,'id'=>'role')); ?>	
                                </div>
                            </div>
                        </div>
						<div class='sname'>
						<div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Student Name<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                    <?php echo $this->Form->input('STUDENT_ID', array('options' => $student,
                                        'name'=> 'STUDENT_ID' , 'label' => FALSE_VALUE, 'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control select2me'  ,'id'=>'role')); ?>	
                                </div>
                            </div>
                        </div>
						</div>
                      
                    </div>
                    <!--/row-->
					     <div class="row">
						
						  <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Event Name<span class="required">
										* </span>
                                </label>
                                <div class="col-md-9 tooltips">
                                     <?php echo $this->Form->input('WINNING_POSITION', array('type' => 'text', 'label' => FALSE_VALUE,
                                        'div' => FALSE_VALUE, 'data-required' => '1', 'class' => 'form-control','placeholder' => 'Example :- (1st,2nd)')); ?>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="form-actions fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-offset-3 col-md-9 no_bg">
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

<script>
	function fn_showStudents(data){
			var eid = $(data).val();
			var data = 'eid='+ eid;
			
			$.ajax({
			data:data,
			type:"POST",
			cache:false,
			url:REQUEST_URL+"EventWinner/getStudentByEvent",    // multiple data sent using ajax
			success: function (html) {
          $('.sname').html(html);
        }
		
      });
			}

</script>