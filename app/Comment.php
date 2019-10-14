<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function add($fields){
        $comment = new static;
        $comment->fill($fields);
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return $comment;
    }
    public function setPost($id){
        $this->post_id = $id;
        $this->save();
    }


    public function allow(){
        $this->status = 1;
        $this->save();
    }
    public function disAllow(){
        $this->status = 0;
        $this->save();
    }
    public function toggleStatus(){
        if($this->status == 0){
            return $this->allow();
        }
        return $this->disAllow();
    }

    public function remove(){
        $this->delete();
    }

    public static function countNewComments(){
        return self::where('status',0)->count();
    }
}
