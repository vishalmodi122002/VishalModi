<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected booking date from the form
    $selectedDate = $_POST['booking_date'];
    
    // Create DateTime objects for the current date and the next day
    $currentDate = new DateTime();
    $nextDay = new DateTime();
    $nextDay->modify('+1 day');

    // Create a DateTime object for the selected booking date
    $bookingDate = new DateTime($selectedDate);

    // Check if the selected booking date is valid (i.e., at least the next day)
    if ($bookingDate >= $nextDay) {
        echo "Booking confirmed for " . $bookingDate->format('Y-m-d') . ".";
    } else {
        echo "Error: The booking date must be at least one day from today.";
    }
} else {
    echo "Invalid request method.";
}
?>
