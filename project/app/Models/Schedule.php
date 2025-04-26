namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'train_id', 'source_station_id', 'destination_station_id',
        'departure_time', 'arrival_time', 'available_seats', 'price', 'status'
    ];

    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function sourceStation()
    {
        return $this->belongsTo(Station::class, 'source_station_id');
    }

    public function destinationStation()
    {
        return $this->belongsTo(Station::class, 'destination_station_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}