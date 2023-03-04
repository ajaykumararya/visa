<?php
include 'include/header.php';
?>


<div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Header Image</h3>
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
                  <label for="exampleInputEmail1">Upload Header Image</label>
                  <input type="text" name="header_image" required class="form-control" placeholder="Upload File">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">upload</button>
              </div>
            </form>
          </div>
</div>
<?php
include 'include/footer.php';
?>
