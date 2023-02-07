<div class="col-md-2 mt-5 mb-5">
  <ul  class="list-group">
    <?php
    foreach($topics as $entry){
    ?>
      <li class="list-group-item"><a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
    <?php
    }
    ?>
  </ul>
</div>