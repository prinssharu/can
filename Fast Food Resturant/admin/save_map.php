<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $googleMapLink = $_POST['googleMapLink'];

    // Validate the input
    if (filter_var($googleMapLink, FILTER_VALIDATE_URL)) {
        // Save the link (example: save to a file)
        file_put_contents('map_link.txt', $googleMapLink);
        echo "Map link saved successfully!";
    } else {
        echo "Invalid URL. Please enter a valid Google Maps embed link.";
    }
} else {
    echo "Invalid request.";
}
?>
