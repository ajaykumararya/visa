<?php
include 'include/header.php';
?>


<div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Image</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?
              if($msg = $this->session->flashdata('msg'));
                echo $msg;
            ?>
            <form method="post" enctype="multipart/form-data" action="">
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Image Title</label>
                  <input type="text" name="image_title" required class="form-control" placeholder="Enter Image Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Upload Header Image</label>
                  <input type="file" name="header_image" required class="form-control" placeholder="Upload File">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">submit</button>
              </div>
            </form>
          </div>
</div>
<?php
include 'include/footer.php';
?>
