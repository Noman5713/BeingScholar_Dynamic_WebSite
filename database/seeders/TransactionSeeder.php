<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create sample verified transactions for testing
        Transaction::create([
            'trxn_id' => 'TXN123456',
            'course_name' => 'AI Based Software Development With Python',
            'amount' => 5100.00,
            'payment_method' => 'bKash',
            'status' => 'verified',
            'verified_at' => now(),
        ]);

        Transaction::create([
            'trxn_id' => 'TXN789012',
            'course_name' => 'Deep Learning with Computer Vision',
            'amount' => 4020.00,
            'payment_method' => 'Nagad',
            'status' => 'verified',
            'verified_at' => now(),
        ]);

        Transaction::create([
            'trxn_id' => 'TXN345678',
            'course_name' => 'Data Structure and Algorithm with Leetcode Exercise',
            'amount' => 1100.00,
            'payment_method' => 'DBBL',
            'status' => 'verified',
            'verified_at' => now(),
        ]);

        Transaction::create([
            'trxn_id' => 'TXN555444',
            'course_name' => 'Machine Learning for Natural Language Processing',
            'amount' => 4020.00,
            'payment_method' => 'bKash',
            'status' => 'verified',
            'verified_at' => now(),
        ]);

        Transaction::create([
            'trxn_id' => 'TXN777888',
            'course_name' => 'Theory of Machine Learning (A-Z in Bangla)',
            'amount' => 600.00,
            'payment_method' => 'Nagad',
            'status' => 'verified',
            'verified_at' => now(),
        ]);

        // Add some pending transactions for testing
        Transaction::create([
            'trxn_id' => 'TXN999000',
            'course_name' => 'Deep Reinforcement Learning For Research',
            'amount' => 1800.00,
            'payment_method' => 'bKash',
            'status' => 'pending',
        ]);

        Transaction::create([
            'trxn_id' => 'TXN111222',
            'course_name' => 'Pandas in Python (A-Z in Bangla)',
            'amount' => 1000.00,
            'payment_method' => 'DBBL',
            'status' => 'pending',
        ]);
    }
}
