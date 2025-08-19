<?php
// Simple test script to check if email sending works
require_once 'vendor/autoload.php';

use Illuminate\Foundation\Application;

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

// Test email sending
try {
    \Illuminate\Support\Facades\Mail::raw("Test OTP: 123456", function ($message) {
        $message->to('test@example.com')
            ->subject('Test Email - BeingScholar OTP')
            ->from(config('mail.from.address'), config('mail.from.name'));
    });
    
    echo "✅ Email sent successfully! Check your Laravel logs for details.\n";
    echo "📧 Mail driver: " . config('mail.default') . "\n";
    echo "📫 From address: " . config('mail.from.address') . "\n";
    
} catch (Exception $e) {
    echo "❌ Email sending failed: " . $e->getMessage() . "\n";
}
?>
