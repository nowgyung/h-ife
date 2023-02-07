<div class="col-md-2 mt-1 mb-1">
  <ul  class="list-group">
    <?php
    foreach($dailydairys as $entry){
    ?>
      <li class="list-group-item"><a href="/index.php/topic/dailydairy/<?=$entry->id?>" style="color:black; text-decoration:none;"><?=$entry->title?></a></li>
    <?php
    }
    ?>
  </ul>
</div>