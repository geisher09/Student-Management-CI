<?php include('header.php'); ?>
<div style="margin-left:25%">
	<div class="container">
		<h2>Course Management</h2>		
		<?php if( $error = $this->session->flashdata('response')): ?>
		<div class="alert alert-dismissible alert-success">
			<?php echo $error; ?>
		</div> 
		<?php endif; ?>
		<div class="col-sm-12">
			<div style="margin-left:800px; float:left">
				<?php echo anchor("home/create", 'New course', ['class'=>'btn btn-primary'],['role'=>'button']); ?>
			</div>
			<table class="table table-list-search table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>ID No</th>
						<th>Name</th>
						<th>Course</th>
						<th>Sex</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<tr>
					<?php if(isset($courses)): ?>
					<?php foreach ($courses as $course){ ?>
						<td><?php echo $course->cid; ?></td>
						<td><?php echo $course->cname; ?></td>
						<td><?php echo $course->cdesc; ?></td>
						<td>
							<?php echo anchor("home/cprofile", 'View Course', ['class'=>'btn btn-info'],['role'=>'button']); ?>
							<?php echo anchor("home/cedit", 'Update Course', ['class'=>'btn btn-success'],['role'=>'button']); ?>
							<?php echo anchor("home/cdelete", 'Delete Course', ['class'=>'btn btn-danger'],['role'=>'button'],['onclick'=>"return confirm('Are you sure you want this student?');"]); ?>
						</td>
					</tr>
					<?php } ?>
					<?php else: ?>
							<tr>NO RECORD FOUND!</tr>
					<?php endif; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<?php include('footer.php'); ?>