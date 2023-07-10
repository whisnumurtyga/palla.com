<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Warehouse extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['location', 'type'];

    public function scopeFilter($query, array $filters)
    {
        
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'LIKE', '%' . request('search') . '%');
        // }

        $query->when(($filters['search']) ?? false, function($query, $search){
        return $query->where('title', 'LIKE', '%' . $search . '%');
        });

        $query->when(($filters['location']) ?? false, function($query, $location){
            return $query->whereHas('location', function($query) use ($location){
                $query->where('slug', $location);
            });
        });

        $query->when(($filters['type']) ?? false, function($query, $type){
            return $query->whereHas('type', function($query) use ($type){
                $query->where('slug', $type);
            });
        });
    }



    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function detailorder()   
    {
        return $this->hasMany(DetailOrder::class, 'warehouse_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

