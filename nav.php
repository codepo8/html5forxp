<div class="nav"><h2>Choose language or <a href="index.php?lang=new">Add a new one</a>:</h2><nav><ul>
  <?php foreach(array_keys($languages) as $l){
    if($l=='new'){continue;}
    if($language == $l){
      echo '<li><strong>'.$languages[$l].'</strong></li>';
    } else {
      echo '<li><a href="index.php?lang='.$l.'">'.$languages[$l].'</a></li>';
    }
  }?></li>
</ul></nav></div>
