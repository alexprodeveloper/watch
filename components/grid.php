<div class="products container">
<?php
foreach ($products as $product) { ?>
    <?php if ($product['pid']) { ?>
        <div class="product">
            <a href="/product.php?id=<?= $product['id']; ?>" class="product__href"></a>
            <img class="img" src="../img/product_img/<?= $product['img_url']; ?>.png">
            <p class="text"><?= $product['name']; ?></p>
            <p class="text"><?= $product['description']; ?></p>
        </div>
    <?php } ?>
<?php } ?>
</div>
