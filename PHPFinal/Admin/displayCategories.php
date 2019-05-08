<section>
<h4>Categories</h4>

<?php $getCat = getAllCats();

foreach($getCat as $cat){?>
<div class="card" style="width: 18rem">
  <div class="card-body">
  <a class='catSelect' href='?cat=<?= $cat['categoryID']?>'><?=$cat['categoryName']?></a>
  </div>
</div>
<?php }?>
<div class="card" style="width: 18rem">
  <div class="card-body">
  <a href='?order=true'>Display Orders</a>
  </div>
</div>
</section>