<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$otp = rand(100000, 999999);
echo "Testing Gmail OTP sending with code: $otp" . PHP_EOL;

try {
    Mail::raw("Your BeingScholar registration OTP is: $otp", function($message) {
        $message->to('academic.noman@gmail.com')
                ->subject('BeingScholar - Registration OTP Test')
                ->from('academic.noman@gmail.com', 'BeingScholar');
    });
    echo "✅ SUCCESS! OTP email sent to your Gmail!" . PHP_EOL;
    echo "📧 Check your Gmail inbox: academic.noman@gmail.com" . PHP_EOL;
    echo "🔢 Your OTP code: $otp" . PHP_EOL;
} catch (Exception $e) {
    echo "❌ Failed: " . $e->getMessage() . PHP_EOL;
}
?>
