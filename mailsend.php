<?php
if (isset($_POST['Appointment_book'])) {
    $name = $_POST["name"];
    $email = $_POST["mail_id"];
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];
    $appointment_topic = $_POST["appointment_topic"];
    $recipient_email = "swapnilsoft18@gmail.com";
    $subject = "Appointment Request from $name";

    // Start building the HTML email body
    $email_body = '<html>
    <head>
        <style>
            /* Define your inline CSS here */
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2 style="border-bottom: 2px solid #000; padding-bottom: 10px;">Appointment Request</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>' . $name . '</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>' . $email . '</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>' . $appointment_date . '</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>' . $appointment_time . '</td>
            </tr>
            <tr>
                <th>Service</th>
                <td>' . $appointment_topic . '</td>
            </tr>
        </table>
    </body>
</html>';

    // Set headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: info@advocategirdhardwivedi.com\r\n";

    if (mail($recipient_email, $subject, $email_body, $headers)) {
        echo "Appointment request sent successfully!";
    } else {
        echo "Failed to send the appointment request. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
