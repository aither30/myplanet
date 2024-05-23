<?php
// Define the directory where images are stored
$directory = "./admin.vendor/uploads/";
$images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

// Check if the image_data.txt file exists and read its contents
$directorydesc = "./admin.vendor/image_data.txt";
$descriptions = file_exists($directorydesc) ? file($directorydesc, FILE_IGNORE_NEW_LINES) : [];

foreach($images as $index => $image) {
    // Default description if not found in file
    $defaultDescription = "Vendor 1";

    // Get the description for the current image
    $currentDescription = isset($descriptions[$index]) ? explode("|", $descriptions[$index])[1] : $defaultDescription;

    // Output the image and description within a button and div
    echo '<button onclick="location.href=\'/Vendor/Vendor1.html\'">';
    echo '<div class="gallery">';
    echo '<img src="' . $image . '" alt="Gallery Image"><br>';
    echo '<div class="desc">' . $currentDescription . '</div>';
    echo '</div>';
    echo '</button>';
}
?>
