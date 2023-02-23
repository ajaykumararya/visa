<?
require 'include/header.php';

if($pages->num_rows() ):
?>
	<div class="row">

		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<strong><i class="fa fa-list"></i> List Page(s)</strong>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>#.</th>
									<th>Name</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Url</th>
								</tr>
							</thead>
							<tbody>
								<?
								$i = 0;
								
									foreach($pages->result() as $page){
										echo '<tr>
												<td>'.++$i.'</td>
												<td>'.$page->page_name.'</td>
												
												
											</tr>';
									}

								?>
							</tbody>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?
else:
	echo '<div class="alert alert-danger">Data not found....</div>';
endif;

require 'include/footer.php';
?>