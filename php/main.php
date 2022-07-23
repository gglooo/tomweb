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
        echo '<img src="' . $file . '" class="d-block" alt="" width="1400" height="720">';
        echo '<div class="carousel-caption d-none d-md-block">';
        echo '<h5 class="carousel-label">' . $label . '</h5>';
        echo '</div>';
        echo '</div>';
        $i++;
    }
    echo '</div>';
}


function get_image($dir) {
    $files = glob($dir . '/*.{jpg,png}', GLOB_BRACE);
    if (count($files) > 0) {
        return $files[0];
    }
    return './img/not_found.png';
}


function get_model_info($dir) {
    $info = array();
    $error = array('Not found', 'Something went wrong with display.txt for this model');
    if ( !file_exists($dir . '/display.txt') ) {
        return $error;
    }

    $txt_file = fopen($dir . '/display.txt','r');

    while ($line = fgets($txt_file)) {
        array_push($info, $line);
    }
    fclose($txt_file);

    if (count($info) != 2) {
        return $error;
    }
    return $info;
}


function populate_models() {
    $directories = array_reverse(glob('./models/*', GLOB_ONLYDIR));
    $curr_column = 0;
    foreach($directories as $directory) {
        echo '<h2 class="model_year">' . substr($directory, strrpos($directory, '/') + 1) . '</h2>';
        echo '<div class="model_grid">';
        $sub_dirs = glob('./models/' . substr($directory, strrpos($directory, '/') + 1) . '/*' , GLOB_ONLYDIR);
        foreach($sub_dirs as $sub_dir) {
            echo '<div class="model_item">';
            echo '<img src="' . get_image($sub_dir) . '">';
            $info = get_model_info($sub_dir);
            echo '<div class="model_info">';
            echo '<h2>' . $info[0] . '</h2>';
            echo '<p>';
            echo $info[1];
            echo '</p>';
            echo '</div>';
            echo '<div class="model_buttons">';
            echo '<a href="./gallery.php?path=' . $sub_dir . '" class="button">Fotogalerie</a>';
    
            $wexbim = glob($sub_dir . '/*.wexbim', GLOB_BRACE);
            if ($wexbim) {
                echo '<a href="./viewer.php?model=' . $wexbim[0] . '" class="button">3D model</a>';
            }

            $ifc = glob($sub_dir . '/*.ifc', GLOB_BRACE);
            if ($ifc) {
                echo '<a href="' . $ifc[0] . '" class="button" download>Stáhnout</a>';
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}


function get_meta_data( $image_path ) {
    $exif = exif_read_data($image_path, 0, true);
    return $exif['IFD0']['ImageDescription'];
}


function fill_photos() {
    $path = $_GET['path'];
    $files = glob($path . '/images/*.{jpg,png}', GLOB_BRACE);
    $in_row = 0;
    echo '<div class="row photos">';
    foreach($files as $file) {
        echo '<div class="col-sm-6 col-md-4 col-lg-3 item" style="padding-bottom: 15px; padding-top: 15px;"><a href="' . $file . '" data-lightbox="photos"><img class="img-fluid" src="' . $file . '" style="border-radius: 7px;"></a></div>';
        // echo '<a href="' . $file . '"data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">';
        // echo '<img src="' . $file . '" class="img-fluid">';
        // echo '</a>';
        $in_row++;
        
        // if ($in_row % 4 == 0 || $in_row == count($files)) {
        //     echo '</div>';
        // }
    }
    echo '</div>';
}

function get_name() {
    $info = get_model_info($_GET['path']);
    echo '<h1 class="model_header" style="margin-top: 0px; padding-left: 15px;">' . $info[0] . '</h1>';
}