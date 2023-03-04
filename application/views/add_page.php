<?php
include 'include/header.php';
?>


<div class="col-md-10">
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
                  <input type="text" name="page_name" required class="form-control" placeholder="Enter Page Name">
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