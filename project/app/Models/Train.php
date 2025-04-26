namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = ['train_number', 'name', 'total_seats', 'status'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}