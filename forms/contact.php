<?php
// Replace with your real receiving email address
$receiving_email_address = 'alexmwangimungai254@gmail.com';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include PHP Email Form library
    require_once '../assets/vendor/php-email-form/php-email-form.php';

    // Initialize PHP Email Form
    $contact = new PHP_Email_Form;
    $contact->ajax = true;

    // Set email data
    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['name'];
    $contact->from_email = $_POST['email'];
    $contact->subject = $_POST['subject'];

    // Message content
    $contact->add_message($_POST['name'], 'From');
    $contact->add_message($_POST['email'], 'Email');
    $contact->add_message($_POST['message'], 'Message', 10);

    // Send email and output result
    echo $contact->send();
} else {
    // Not a POST request, handle accordingly (optional)
    http_response_code(405); // Method Not Allowed
    echo "Method Not Allowed";
}
?>
