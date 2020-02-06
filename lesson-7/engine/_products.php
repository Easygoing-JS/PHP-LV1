<?php
    include('config/common.php');

    $sql = "SELECT * FROM products ORDER BY product_name;";
    //echo $sql . "<br>";
    $result = mysqli_query($connection, $sql) or die($err[] = "Невозможно выполнить запрос на выборку товаров");
    $divs_product = '';

    for ($i = 1; $row = mysqli_fetch_array($result); $i++) {
        $id_product_list[$i] = $row['id_product'];
        $product_name_list[$i] = $row['product_name'];
        $product_text_list[$i] = $row['product_text'];
        $product_price[$i] = $row['price'];
        $photo_big_list[$i] = $row['photo_big'];
        $photo_thumb_list[$i] = $row['photo_thumb'];

        if ($photo_thumb_list[$i] != '' && file_exists($_SERVER['DOCUMENT_ROOT'] . $photo_thumb_list[$i])) {
            $size[$i] = getimagesize($_SERVER['DOCUMENT_ROOT'] . $photo_thumb_list[$i]);
            $photo_thumb_list[$i] = '<img src="' . $photo_thumb_list[$i] . '" ' . $size[$i] . '>';
        } else {
            $photo_thumb_list[$i] = '<img src="/img/shablon-images/no_photo.png" width="150" height="150" alt="">';
        }
        $photo_thumb_list[$i] = '<a href="?id=' . $id_product_list[$i] . '">' . $photo_thumb_list[$i] . '</a>';

        $divs_product .= '<div class="goods-item">' .
                            $photo_thumb_list[$i] .
                            '<a class="card-title" href="/?id=' . $id_product_list[$i] . '">' . $product_name_list[$i] .
                            '</a> <span class="card-price">' . $product_price[$i] . '</span> 
                            <a class="buy-button" href="/cart?id=' . $id_product_list[$i] . '">Купить</a>' .
                        '</div>';

    }
    if ($divs_product != '') {
        $divs_product = '<div class="goods-list">' . $divs_product . '</div>';
    }

    echo $divs_product;


?>


