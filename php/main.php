<?php


function populate_carousel() {
    $files = glob('./slide/*.{jpg,png}', GLOB_BRACE);

    populate_carousel_indicators(count($files));
    populate_carousel_items($files);
}


function populate_carousel_indicators($count) {
    echo '<div class="carousel-indicators">';
    for ($i = 0; $i < $count; $i++) {
        echo $i == 0 ? '<button type="button" data-bs-target="#my_carousel" data-bs-slide-to="' . $i . '" class="active" aria-current="true" aria-label="Slide 1"></button>' 
        : '<button type="button" data-bs-target="#my_carousel" data-bs-slide-to="' . $i . '" aria-label="Slide ' . ($i + 1) . '"></button>';
    }
    echo '</div>';
}


function populate_carousel_items($files) {
    $i = 0;
    echo '<div class="carousel-inner">';

    foreach($files as $file) {
        $label = get_meta_data($file);
        echo $i == 0 ? '<div class="carousel-item active">' : '<div class="carousel-item">';
        echo '<img src="' . $file . '" class="d-block w-100" alt="" width="1400" height="900">';
        echo '<div class="carousel-caption d-none d-md-block">';
        echo '<h5 class="carousel-label">' . $label . '</h5>';
        echo '</div>';
        echo '</div>';
        $i++;
    }
    echo '</div>';
}


function populate_models() {
    $directories = array_reverse(glob('./models/*', GLOB_ONLYDIR));
    $curr_column = 0;
    foreach($directories as $directory) {
        echo '<h2 class="model_year">' . substr($directory, strrpos($directory, '/') + 1) . '</h2>';
    }
}


function get_meta_data( $image_path ) {
    $exif = exif_read_data($image_path, 0, true);
    return $exif['IFD0']['ImageDescription'];
}