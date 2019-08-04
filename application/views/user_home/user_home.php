<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success" role="alert">
  <center><?php echo $this->session->flashdata('msg'); ?></center>
</div>
<?php endif; ?>

<main id="feed">
      <?php foreach($feed as $row){ ?>
        <div class="photo">
            <header class="photo__header">
                <img src="<?php echo base_url()?>assets/userhome/img/<?=$row['author_img']?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?=$row['author_first_name']?>&nbsp;<?=$row['author_last_name']?></span>
                    <span class="photo__location"><?=$row['company']?></span>
                </div>
            </header>
            <h1 class="title ml-3 mr-3 mb-3"><?=$row['title']?></h1>
            <ul class="pt-1">
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Company / Organisation : </span><?=$row['place']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Location :</span> <?=$row['location']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Web Link : </span><a href="<?=$row['reg_link']?>"><?=$row['reg_link']?></a> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Last Date :</span> <?=$row['last_date']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Email :</span> <?=$row['email']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Contact Number :</span> <?=$row['phone']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">More Info :</span> <?=$row['details']?> </li>
            </ul>
            <div class="photo__info">
                <div class="photo__add-comment-container"></div>
            </div>
        </div>
      <?php } ?>
