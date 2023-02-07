<div class="col-md-10 mt-5 mb-5">
  <article>
    <h1><?=$topic->title?></h1>
    <div>
      <?=auto_link($topic->description)?>
      </div>
  </article>
  <form action="/index.php/topic/delete" method="post">
    <input type="hidden" name="topic_id" value="<?=$topic->id?>"/>
    <a href="/index.php/topic/add" class ="btn btn-light btn btn-outline-secondary mr-3">추가</a>
    <input type="submit" class ="btn btn-light btn btn-outline-secondary mr-3" value="삭제"/>
</form>
  
</div>