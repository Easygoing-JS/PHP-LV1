<?php
    include('../../config/common.php');
    include('../../engine/admin/product/mod_products_show.php');


    $h1 = $title;
    $title = $mode_or_add;
    include('../../templates/header.php');

?>


<main class="twoForm">


    <div class="divFormProd">
        <form id="formProd" method=POST ACTION="mod_products_check.php" ENCTYPE="multipart/form-data">
            <?php if (isset($_POST['id_redact']) && $_POST['id_redact'] > 0) {
                echo '<input type=hidden name=id_redact value="' . $_POST['id_redact'] . '" >';
            } ?>
            <div><h3><?=$mode_or_add;?></h3></div>
            <div><input type="submit" value="Сохранить  описание товара"></div>

            <div>ID <?=$id_product_this;?></div>

            <div class="field">* Название товара:</div>
            <div><input type=TEXT name=product_name size=30 value='<?php if (isset($_POST['product_name']))
                    echo $_POST['product_name']; else echo $product_name_this; ?>'></div>

            <div>* Цена:</div>
            <div><input type=TEXT name=price size=30 value='<?php if (isset($_POST['price']))
                    echo $_POST['price']; else echo $price_this; ?>'></div>

            <div>* ВЫБРАТЬ группы, в которых показывать товар</div>
            <div class="groups_list"><?=$groups_list;?></div>

            <div>Описание товара:</div>
            <div><textarea rows=7 id="product_text" name="product_text">
                    <?php if (isset($_POST['product_text']))
                        echo $_POST['product_text']; else echo $product_text_this; ?>
                </textarea>
            </div>

            <div>
                <fieldset>
                    <legend>Файл ИЗОБРАЖЕНИЯ</legend>
                    Фото: (не более 1000 px)<br>
                    <input type="file" name="photo" accept="image/jpeg,image/png,image/gif">
                    <?php
                        if ($photo_big_this != '' || $photo_thumb_this != '') {
                            echo '<input type=hidden name="photo_big" value="' . $photo_big_this . '">';
                            echo '<input type=hidden name="photo_thumb" value="' . $photo_thumb_this . '">';
                            echo "<br><br>" . $photo_on_page;
                        }
                    ?>
                </fieldset>

            </div>

            <div><input type="submit" value="Сохранить описание товара"></div>

        </form>

    </div>
</main>
<?php
    include('../../templates/footer.php');
?>


