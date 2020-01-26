<?php

    $albumItems = scandir($imagesPath);

    // для простоты я использовал один набор изображений,
    // увеличение/уменьшение — за счет изменения параметра width
    for ($i = 0; $i < count($albumItems); $i++) : ?>
        <?php
            if ($i > 1) : ?>
                    <img src="<?="$imagesPath/$albumItems[$i]"?>" width="150px" class="image" alt="image">
            <?php
                endif; ?>
        <?php
    endfor; ?>
