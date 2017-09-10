<?php include('header.php'); ?>
<div style="margin-left:25%">
	<div class="container">
		<h2>Student Management</h2>		
		<?php if( $error = $this->session->flashdata('response')): ?>
		<div class="alert alert-dismissible alert-success">
			<?php echo $error; ?>
		</div> 
		<?php endif; ?>
		<div class="col-sm-11">
			<div style="margin-left:800px; float:left">
				<?php echo anchor("home/create", 'New Student', ['class'=>'btn btn-primary'],['role'=>'button']); ?>
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
					<?php if(isset($students)): ?>
					<?php foreach ($students as $student){ ?>
						<td><?php echo $student->idno; ?></td>
						<td><?php echo $student->lname, ',', $student->fname, ' ', $student->mname; ?></td>
						<td><?php echo $student->course; ?></td>
						<td><?php echo $student->sex; ?></td>
						<td>
							<?php echo anchor("home/view/{$student->id}", 'View Student', ['class'=>'btn btn-info'],['role'=>'button']); ?>
							<?php echo anchor("home/edit/{$student->id}", 'Update Student', ['class'=>'btn btn-success'],['role'=>'button']); ?>
							<?php echo anchor("home/delete/{$student->id}", 'Delete Student', ['class'=>'btn btn-danger'],['role'=>'button'],['onclick'=>"return confirm('Are you sure you want this student?');"]); ?>
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