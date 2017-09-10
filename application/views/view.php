<?php
include('header.php');
?>
<div style="margin-left:25%">
	<div class="container bg-default">
		<h2>View Student</h2>
		<?php  echo form_open("home/update/{$studf->id}", ['class'=>'form-horizontal']); ?>
			  <fieldset>
			  	<div class="container bg-info">
			  	<div class="row">
			  		<div class="col-lg-6">
				  		<h4><label for="inputid" class="col-lg-2 control-label">ID no:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $studf->idno; ?></h4>
				      	</div>
			  		</div>		  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputlast" class="col-lg-2 control-label">Lname:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $studf->lname; ?></h4>
				      	</div>
			  		</div>
			  	
			  	</div>

			  	<div class="row">

			  	<div class="col-lg-6">
				  		<h4><label for="inputfirst" class="col-lg-2 control-label">Fname:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $studf->fname; ?></h4>
				      	</div>
			  		</div>
			  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputmiddle" class="col-lg-2 control-label">Mname:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $studf->mname; ?></h4>
				      	</div>
			  		</div>		  	
			  	</div>

			  	<div class="row">
			  		<div class="col-lg-6">
				  		<h4><label for="inputcourse" class="col-lg-2 control-label">Course:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $studf->course; ?></h4>
				      	</div>

			  		</div>			  	
			  	</div>

			  	<div class="row">
			  		<div class="col-lg-6">
				  		<h4><label for="inputsex" class="col-lg-2 control-label">Sex:</label></h4>
				      	<div class="col-lg-10">
				      		<h4><?php echo $studf->sex; ?></h4>
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