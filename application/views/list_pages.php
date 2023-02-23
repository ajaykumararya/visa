<?php
include 'include/header.php';
?>

<div class="col-md-12">
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
                    <div class="box-body list_page">
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
    get_page();
        delete_page();
       


        function delete_page(id)
        {
            $.ajax({
                type:'post',
                url:'<?=base_url('User/ajax')?>',
                data:{status:"del_page",id:id},
                dataType:"json",
                success:function(res){
                    $("#Load_status").html(res.status);
                    $("#hide_"+id).hide(1000);
                    location.reload(true);
                }

            }); 
        }

  function get_page()
  {
    
        $.ajax({
        type:"post",
        url:"<?=base_url('User/ajax')?>",
        data:{status:"get_page"},
        dataType:'json',
        beforeSend:function(){

        },
        success:function(res){
           $('.list_page').html(res.html);
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