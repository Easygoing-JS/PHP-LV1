<?php
    include('config/common.php');

    if (isset($_GET['id']) && $_GET['id'] > 0) :
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id_product='" . $_GET['id'] . "' ORDER BY product_name;";
        //echo $sql . "<br>";
        $result = mysqli_query($connection, $sql) or die($err[] = "Невозможно выполнить запрос на выборку товаров");
        $divs_product = '';
        for ($i = 1; $row = mysqli_fetch_array($result); $i++) {
            $id_product_list[$i] = $row['id_product'];
            $product_name_list[$i] = $row['product_name'];
            $product_text_list[$i] = $row['product_text'];
            $photo_big_list[$i] = $row['photo_big'];

            if ($photo_big_list[$i] != '' && file_exists($_SERVER['DOCUMENT_ROOT'] . $photo_big_list[$i])) {
                $size[$i] = getimagesize($_SERVER['DOCUMENT_ROOT'] . $photo_big_list[$i]);
                $photo_big_list[$i] = '<div><img class="card-photo-big" src="' . $photo_big_list[$i] . '"  alt="" ' . $size[$i] . '></div>';
            } else {
                $photo_big_list[$i] = '<div><img class="card-photo-big" src="/img/shablon-images/no_photo.png" alt=""></div>';
            }
            $divs_product .= $photo_big_list[$i] .
                '<div class="card-big">' .
                '<div class="card-title">' . $product_name_list[$i] . '</div>' .
                '<div><a class="buy-button" href="/cart?id=' . $id_product_list[$i] . '">Купить</a></div>' .
                '<p class="card-desc">' . $product_text_list[$i] . '</p>' .
                '</div>';
        }
        if ($divs_product != '') {
            $divs_product = '<div class="good-page">' . $divs_product . '</div>';
        }

        echo $divs_product;
    endif;