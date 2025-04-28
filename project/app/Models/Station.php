<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    // Define any necessary relationships, fillable attributes, etc.
    protected $fillable = ['name', 'location'];
    // Example of a relationship with Train model
    public function trains()
    {
        return $this->hasMany(Train::class);
    }
    // Example of a relationship with Schedule model
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
    // Example of a relationship with Booking model
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    // Example of a relationship with User model
    public function users()
    {
        return $this->hasMany(User::class);
    }
    // Example of a relationship with Ticket model
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    // Example of a relationship with Payment model
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    // Example of a relationship with Notification model
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    // Example of a relationship with Feedback model
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    // Example of a relationship with Review model
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // Example of a relationship with Report model
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    // Example of a relationship with Announcement model
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
}