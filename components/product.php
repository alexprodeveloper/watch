<div class="container">
    <div class="change">
        <img src="../img/product_img/<?= $product['img_url'] ?>.png" alt="" class="change__img">
        <div class="input__container">
            <input type="text" value="<?= $product['name']; ?>" class="input" id="name"/>
            <textarea class="input" id="description"><?= $product['description']; ?></textarea>
        </div>
    </div>
</div>
