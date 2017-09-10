<?php
include('header.php');
?>
<div style="margin-left:25%">
	<div class="container bg-default">
		<h2>View Course</h2>
		<?php  echo form_open("home/view/{$course->cid}", ['class'=>'form-horizontal']); ?>
			  <fieldset>
			  	<div class="container bg-info">
			  	<div class="row">
			  		<div class="col-lg-6">
				  		<h4><label for="inputcourse" class="col-lg-2 control-label">Course:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $course->cid; ?></h4>
				      	</div>
			  		</div>		  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputcname" class="col-lg-2 control-label">Course Name:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $course->cname; ?></h4>
				      	</div>
			  		</div>
			  	
			  	</div>

			  	<div class="row">

			  	<div class="col-lg-6">
				  		<h4><label for="inputcdesc" class="col-lg-2 control-label">Course Desc:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $course->cdesc; ?></h4>
				      	</div>
			  		</div>
			  	
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