<?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Retrieve venue details from the GET parameters
            $selectedVenue = isset($_GET['venue']) ? $_GET['venue'] : '';
            $selectedCost = isset($_GET['cost']) ? $_GET['cost'] : '';
            $selectedImage = isset($_GET['image']) ? $_GET['image'] : '';

            // Display selected venue details
            echo '<div class="venue-details">';
            echo '<img src="' . $selectedImage . '" alt="' . $selectedVenue . '">';
            echo '<h3>' . $selectedVenue . '</h3>';
            echo '<p>$' . $selectedCost . '</p>';
            echo '</div>';
        } else {
            // Redirect to the venue selection page if accessed without proper parameters
            header("Location: choose_venue.php");
            exit();
        }
        ?>