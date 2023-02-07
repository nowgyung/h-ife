<div class="col-md-10 mt-5 mb-5">
<form action="/index.php/topic/add" method="post" class="col-md-12">
  <?php echo validation_errors(); ?>
  <input type="text" name="title" placeholder="제목" class="col-md-12"/>
  <textarea name="description" placeholder="본문" class="col-md-12" rows="15"></textarea>
  <div class="form_control">
    <input class="btn btn-light btn btn-outline-secondary" type="submit"/>
</div>
</form>
<script src="/static/lib/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('description', {
    'filebrowserUploadMethod': 'form',
    'filebrowserUploadUrl':'/index.php/topic/upload_receive_from_ck'
  });
</script>  
</div>
