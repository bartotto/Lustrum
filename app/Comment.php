<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Comment;
use Carbon\Carbon;

class Comment extends Model {
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'user_id', 'title', 'body', 'post_id'
        ];
    
    public function saveComment($data) {
        $this->user_id = auth()->user()->id;
        $this->title = $data['title'];
        $this->body = $data['body'];
        $this->save();
        return 1;
        }
        
    public function updateComment($data) {
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
    
    public function post() {
        return $this->belongsTo(Post::class);
        }

    }
