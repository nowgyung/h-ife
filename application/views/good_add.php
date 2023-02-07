<div class="col-md-10 mt-1 mb-5">
  <form action="/index.php/topic/good_add" method="post" class="col-md-12">
    <?php echo validation_errors(); ?>
    <h4>좋은글을 작성하는 공간입니다.</h4>
    <input type="text" name="title" placeholder="제목" class=" form-control col-md-12 mb-3"/>
    <textarea name="description" placeholder="본문" class=" form-control col-md-12" rows="15"></textarea>
    <div class="form_control">
      <input class="btn btn-light btn btn-outline-secondary" type="submit"/>
    </div>
  </form>
  <?php
    if($this->session->userdata('is_login')){
        ?>
      <script src="/static/lib/ckeditor/ckeditor.js"></script>
      <script>
        CKEDITOR.replace('description', {
          'filebrowserUploadMethod': 'form',
          'filebrowserUploadUrl':'/index.php/topic/upload_receive_from_ck'
        });
      </script> 
      <?php
    }else{
    ?>
    <?php
    }
    ?>
</div>
