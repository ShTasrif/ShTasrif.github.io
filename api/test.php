<?php
// Check if the 'num' parameter is set in the URL
if(isset($_GET['num'])) {
    // Retrieve the value of 'num' parameter
    $num = $_GET['num'];

    // Check if 'num' is numeric
    if(is_numeric($num)) {
        // Perform the division
        $result = $num / 4;

        // Prepare the response as JSON
        $response = array(
            'status' => 'success',
            'result' => $result
        );
    } else {
        // 'num' is not numeric
        $response = array(
            'status' => 'error',
            'message' => 'Invalid input. Parameter "num" must be numeric.'
        );
    }
} else {
    // 'num' parameter is not set
    $response = array(
        'status' => 'error',
        'message' => 'Missing input. Parameter "num" is required.'
    );
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
