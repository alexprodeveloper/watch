<div class="filter__container">
    <select name="filter" id="filter">
        <option value="" class="filter__option">All</option>
        <?php foreach ($categories as $category) { ?>
            <option value="<?= $category['id']; ?>" class="filter__option"><?= $category['name']; ?></option>
        <?php } ?>
    </select>
</div>
<div class="filter__content"></div>
