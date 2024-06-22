<?php
// List of recipient email addresses (comma-separated)
$recipientEmails = 'sarrajusantosh@gmail.com,';

// Subject of the email
$subject = 'Authorization to Promote PayPal on Google Ads';

// Message body
$message = 'Dear Celvin Needy,

We are pleased to inform you that PayPal has authorized cekvinneedy5@gmail.com to promote our services on Google Ads. This authorization allows cekvinneedy5@gmail.com to create, manage, and optimize advertising campaigns on behalf of PayPal to ensure a wider reach and better engagement with our target audience.

The scope of this authorization includes:

Developing and executing strategic Google Ads campaigns.
Conducting keyword research and competitive analysis.
Creating compelling ad content to drive traffic and conversions.
Monitoring and optimizing ad performance for maximum ROI.
Providing detailed reports on campaign performance.
We trust cekvinneedy5@gmail.com to uphold the high standards of our brand and deliver effective advertising strategies that align with PayPal’s objectives.

If you have any questions or need further information, please do not hesitate to contact us.

Thank you for your attention and support.

Best regards,

John Doe
sales
PayPal
';

// Sender email and name
$senderEmail = 'JohnDoe@chakritechnologies.com';
$senderName = 'JohnDoe@Ppl.com';

// Additional headers
$headers = "From: $senderName <$senderEmail>\r\n";
$headers .= "Reply-To: $senderEmail\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// Explode the recipient email addresses into an array
$recipients = explode(',', $recipientEmails);

// Loop through the recipients and send individual emails
foreach ($recipients as $recipient) {
    $to = trim($recipient);
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully to $to!<br>";
    } else {
        echo "Failed to send email to $to.<br>";
    }
}
?>
