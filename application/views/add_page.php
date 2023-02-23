<?php
include 'include/header.php';
?>

<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Page</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?
              if($msg = $this->session->flashdata('msg'));
                echo $msg;
            ?>
            <form method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Page Name</label>
                  <input type="text" name="page_name" class="form-control" placeholder="Enter Page Name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
</div>

<div class="col-md-6">
<div class="box">
				<div class="box-header bg-primary text-white">
					<strong><i class="fa fa-list"></i> List Page(s)</strong>
				</div>
				<div class="box-body">
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
							<!-- <tbody>
								
							</tbody> -->
							
						</table>
					</div>
				</div>
			</div>
</div>
</div>





<?php
include 'include/footer.php';
?>