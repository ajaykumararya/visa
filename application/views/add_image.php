<?php
include 'include/header.php';
?>


<div class="col-md-6">
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
        <form method="post" enctype="multipart/form-data" action="<?=base_url()?>User/add_image">
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




<!----List Image----->

<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">List Pages</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body list_image">
            <table>

            </table>
        </div>
    </div>
    <!-- /.box -->
</div>


<?php
include 'include/footer.php';
?>



<script type="text/javascript"> 
        get_image();
        delete_image();
       


        function delete_image(id)
        {
            $.ajax({
                type:'post',
                url:'<?=base_url('User/ajax')?>',
                data:{status:"del_image",id:id},
                dataType:"json",
                success:function(res){
                    $("#Load_status").html(res.status);
                    $("#hide_"+id).hide(1000);
                    location.reload(true);
                }

            }); 
        }

  function get_image()
  {
    
        $.ajax({
        type:"post",
        url:"<?=base_url('User/ajax')?>",
        data:{status:"get_image"},
        dataType:'json',
        beforeSend:function(){

        },
        success:function(res){
           $('.list_image').html(res.html);
        },
        complete:function()
        {

        },
        error:function(a,b,c){
          alert(a);
          console.log(a.responseText);
          console.log(b);
          console.log(c);
        }

      });
  }

</script>