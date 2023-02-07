<div class="col-md-10 mt-1 mb-1">
  <article>
    <form action="/index.php/topic/good_delete" method="post">
      <input type="hidden" name="goodwriting_id" value="<?=$goodwriting->id?>"/>
      <h4>좋은글을 작성하는 공간입니다.</h4>
      <a href="/index.php/topic/good_add" class ="btn btn-light btn btn-outline-secondary mr-3">추가</a>
      <?php
      if($this->session->userdata('is_login')){
          ?>
      <input type="submit" class ="btn btn-light btn btn-outline-secondary mr-3" value="삭제"/>
      <?php
      }else{
      ?>
      <?php
      }
      ?>  
    </form>
    <div style="text-align:center">
      <h1><?=$goodwriting->title?></h1>
      <div>
        <?=auto_link($goodwriting->description)?>
      </div>
    </div>
  </article>
</div>
