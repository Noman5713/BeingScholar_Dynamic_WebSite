<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo 'Testing Student Registration Email Flow...' . PHP_EOL;

$testEmail = 'academic.noman@gmail.com';
$otp = rand(100000, 999999);

try {
    Mail::raw("Your OTP verification code for BeingScholar registration is: $otp

This code will expire in 15 minutes for security reasons.

If you didn't request this code, please ignore this email.

Best regards,
BeingScholar Team", function($message) use ($testEmail) {
        $message->to($testEmail)
                ->subject('BeingScholar - Email Verification OTP')
                ->from('academic.noman@gmail.com', 'BeingScholar');
    });
    
    echo '✅ Registration OTP email sent successfully!' . PHP_EOL;
    echo '📧 Check your Gmail: ' . $testEmail . PHP_EOL;
    echo '🔢 OTP Code: ' . $otp . PHP_EOL;
    
} catch (Exception $e) {
    echo '❌ Registration email failed: ' . $e->getMessage() . PHP_EOL;
}
?>
