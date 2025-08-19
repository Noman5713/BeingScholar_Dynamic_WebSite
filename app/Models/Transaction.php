<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'trxn_id',
        'course_name',
        'course_id',
        'user_id',
        'amount',
        'payment_method',
        'status',
        'verified_at',
        'verified_by',
        'notes',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
        'amount' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    // Scope for verified transactions
    public function scopeVerified($query)
    {
        return $query->where('status', 'verified');
    }

    // Scope for pending transactions
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    // Check if user has access to a specific course
    public static function userHasAccess($userId, $courseName)
    {
        return self::where('user_id', $userId)
            ->where('course_name', $courseName)
            ->where('status', 'verified')
            ->exists();
    }

    // Verify transaction by transaction ID and course name
    public static function verifyTransaction($trxnId, $courseName, $userId = null)
    {
        $query = self::where('trxn_id', $trxnId)
            ->where('course_name', $courseName)
            ->where('status', 'verified');
        
        if ($userId) {
            $query->where('user_id', $userId);
        }
        
        return $query->exists();
    }
}
