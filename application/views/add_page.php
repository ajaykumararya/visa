<?php
include 'include/header.php';
?>


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

<?php
include 'include/footer.php';
?>