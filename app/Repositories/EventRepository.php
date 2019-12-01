<?php
namespace App\Repositories;
use App\Event;
use Illuminate\Support\Facades\Hash;
class EventRepository extends BaseRepository
{
    protected $modelClass = Event::class;

  
   
    public function create($event)
    {
        $query = $this->newQuery();
        $response = $query->create(['type_event_id' => $event["type_event_id"],  'image' => isset($event['image']) && empty($event['image']) ? $event['image'] : null, 'lng' => $event["lng"], 'lat' => $event["lat"]]);
        return $response;
    }

}