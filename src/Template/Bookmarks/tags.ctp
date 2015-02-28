<h1>
   Bookmarks taggged with
   <?php
    if(!empty($tags)){
   ?>
   <?= $this->Text->toList($tags)?>
   <?php }?>
</h1>

<section>
    <?php if(!empty($bookmarks)) {?>
    <?php foreach($bookmarks as $bookmark): ?>
    <article>
      <h4><?= $this->Html->link($bookmark->title,$bookmark->url)?></h4>
      <small><?= h($bookmark->url)?></small>
      <?= $this->Text->autoParagraph($bookmark->description) ?>
    </article>
    <?php endforeach;?>
    <?php }?>
</section>