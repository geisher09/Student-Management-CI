<?php
include('header.php');
?>
<div style="margin-left:25%">
	<div class="container bg-default">
		<h2>Add Student</h2>
		<?php  echo form_open('home/save', ['class'=>'form-horizontal']); ?>
			  <fieldset>
			  	<div class="container bg-info">
			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputid" class="col-lg-2 control-label">ID no:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'idno','class'=>'form-control','placeholder'=>'ID no', 'value'=>set_value('idno')]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('idno'); ?>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputlast" class="col-lg-2 control-label">Lname:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'lname','class'=>'form-control','placeholder'=>'Last name', 'value'=>set_value('lname')]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('lname'); ?>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  	<div class="col-lg-6">
				  		<h4><label for="inputfirst" class="col-lg-2 control-label">Fname:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'fname','class'=>'form-control','placeholder'=>'First name', 'value'=>set_value('fname')]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('fname'); ?>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputmiddle" class="col-lg-2 control-label">Mname:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'mname','class'=>'form-control','placeholder'=>'Middle name', 'value'=>set_value('mname')]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('mname'); ?>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputcourse" class="col-lg-2 control-label">Course:</label></h4>
				      	<div class="col-lg-10">
 				                <div class="form-group">
							      <div class="col-sm-6 col-md-4">
							        <select name="course" class="form-control">	
							        <?php if(isset($courses)): ?>
									<?php foreach ($courses as $course){ ?>
							          <option value="<?php echo $course->cname; ?>	"><?php echo $course->cname; ?></option>
							        <?php } ?>
									<?php else: ?>
											<option>NO COURSES!</option>
									<?php endif; ?>
							        </select> 
							      </div>
							    </div> 
				      	</div>

					    <div class="col-lg-6">
				  			<div><br></div>
				  			<?php echo form_error('course'); ?>
				  		</div>
			  		</div>			  	
			  	</div>

			  	<div class="row">

			  		<div class="col-lg-6">
				  		<h4><label for="inputsex" class="col-lg-2 control-label">Sex:</label></h4>
				      	<div class="col-lg-10">
				            <?php echo form_input(['name'=>'sex','class'=>'form-control','placeholder'=>'Sex', 'value'=>set_value('sex')]); ?>
				      	</div>
			  		</div>

			  		<div class="col-lg-6">
			  			<div><br></div>
			  			<?php echo form_error('sex'); ?>
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
<?php include 'footer.php'; ?>