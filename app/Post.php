<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Post;
use Carbon\Carbon;

class Post extends Model {
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'user_id', 'title', 'body'
        ];
    
    public function savePost($data) {
        $this->user_id = auth()->user()->id;
        $this->title = $data['title'];
        $this->body = $data['body'];
        $this->save();
        return 1;
        }
        
    public function updatePost($data) {
        $post = $this->find($data['id']);
        $post->user_id = auth()->user()->id;
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return 1;
        }
        
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