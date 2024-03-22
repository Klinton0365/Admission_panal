<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date'])) {
        $user = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $date = $_POST['date'];

        // Handle file uploads
        if (isset($_FILES['file1']) && isset($_FILES['file2'])) {
            // Check if files are uploaded successfully
            if ($_FILES['file1']['error'] === UPLOAD_ERR_OK && $_FILES['file2']['error'] === UPLOAD_ERR_OK) {
                // Check if files are PDFs
                $file1_extension = pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION);
                $file2_extension = pathinfo($_FILES['file2']['name'], PATHINFO_EXTENSION);
                if ($file1_extension == 'pdf' && $file2_extension == 'pdf') {
                    // Move files to desired directory
                    $upload_dir = '../files';
                    move_uploaded_file($_FILES['file1']['tmp_name'], $upload_dir . '12th_marksheet.pdf');
                    move_uploaded_file($_FILES['file2']['tmp_name'], $upload_dir . '10th_marksheet.pdf');

                    // Proceed with database insertion or other actions
                    // ...

                    // Redirect to success page
                    header("Location: /success_page.php");
                    exit;
                } else {
                    echo "Only PDF files are allowed.";
                }
            } else {
                echo "File upload failed.";
            }
        } else {
            echo "File upload missing.";
        }
    } else {
        echo "Required fields missing.";
    }
}
?>
