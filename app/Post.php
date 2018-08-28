<?php

namespace App;

use App\Post;
use Carbon\Carbon;

class Post extends Model {
    
    protected $fillable = [
        'title', 'body'
        ];
    
    public function user() {
        return $this->belongsTo(User::class);
        }
    
    public function comments() {
        return $this->hasMany(Comment::class);
        }
    
    public function publish_comment(Comment $comment) {
        $this->comments()->save($comment);
        }
        
    public function scopeFilter($query, $filters) {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
            }
        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
            }
       }
       
    public static function archives() {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                ->groupBy('year', 'month')
                ->orderByRaw('min(created_at) desc')
                ->get()
                ->toArray();
        }
    
    }