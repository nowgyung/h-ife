<div class="col-md-10 mt-1 mb-1">
  <article>
    <form action="/index.php/topic/wisesaying_delete" method="post">
      <input type="hidden" name="wisesaying_id" value="<?=$wisesaying->id?>"/>
      <h4>명언을 작성하는 공간입니다.</h4>
      <a href="/index.php/topic/wisesaying_add" class ="btn btn-light btn btn-outline-secondary mr-3">추가</a>
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
      <h1><?=$wisesaying->title?></h1>
        <div>
          <?=auto_link($wisesaying->description)?>
      </div>
    </div>
  </article>
</div>
