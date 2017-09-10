<?php
include('header.php');
?>
<div style="margin-left:25%">
	<div class="container bg-default">
		<h2>Edit Course</h2>
		<?php  echo form_open("home/updatec/{$course->cid}", ['class'=>'form-horizontal']); ?>
			  <fieldset>
			  	<div class="container bg-info">
			  	<div class="row">
			  		<div class="col-lg-6">
				  		<h4><label for="inputcid" class="col-lg-2 control-label">Course id:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'cid','class'=>'form-control','placeholder'=>'Course id', 'value'=>set_value('cid', $course->cid)]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('cid'); ?>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputcname" class="col-lg-2 control-label">Course Name:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'cname','class'=>'form-control','placeholder'=>'Course name', 'value'=>set_value('cname', $course->cname)]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('cname'); ?>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  	<div class="col-lg-6">
				  		<h4><label for="inputcdesc" class="col-lg-2 control-label">Course Desc:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'cdesc','class'=>'form-control','placeholder'=>'Course Desc', 'value'=>set_value('cdesc',$course->cdesc)]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('cdesc'); ?>
			  		</div>			  	
			  	</div>

			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary'])?>
			        <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default'])?>
			    </div>
			  </fieldset>
			<?php  echo form_close(); ?>
		</div>	
	</div>
</div>
<script type="text/javascript">
	var course = ["<?=$studf->course?>"];
	$("#courseee").val(course);
</script>
<?php include 'footer.php'; ?>