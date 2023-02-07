<div class="col-md-10 mt-1 mb-1">
  <article>
    <form action="/index.php/topic/daily_delete" method="post">
      <input type="hidden" name="dailydairy_id" value="<?=$dailydairy->id?>"/>
      <h4>감사일기를 작성하는 공간입니다.</h4>
      <a href="/index.php/topic/daily_add" class ="btn btn-light btn btn-outline-secondary mr-3">추가</a>
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
        <h1><?=$dailydairy->title?></h1>
        <div>
          <?=auto_link($dailydairy->description)?>
        </div>
      </div>
  </article>
</div>
