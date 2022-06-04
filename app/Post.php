<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Optix\Media\HasMedia;

class Post extends Model
{

     use HasMedia;

   // use SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    //protected $guarded = ['id'];


     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    protected $fillable = [
        "id",
        "title",
        "content",
        "photo",
        "video",
        "status",
        "user_id",
        "category_id",
        "group_id",
        "school_id",
        "reposted",
        "reposterName",
        "isPromoted",
        "repostId",
        "repostHasPhoto",
        "checktime",
        "graduate",
        "plan",
        "school",
        "Poster_email",
    ];

    // protected $fillable = [
    //     "id","title","content","photo","video","status","user_id","category_id",
    //     "group_id","school_id"
    // ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany(Report::class, 'post_id');
    }

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(Postlike::class);
    }

    Public function todaysPost()
    {
        $today = Carbon::now();
        return Post::whereDate('created_at', $today)->with(['user', 'category'])->orderBy('created_at', 'desc')->paginate(10);
        // return Post::whereDate('created_at', $today)->with(['user', 'category'])->orderBy('created_at', 'desc')->paginate(10);
        //return Post::where(['user', 'category'])->orderBy('created_at', 'desc')->paginate(10);
        return Post::with(['user', 'category'])->orderBy('created_at', 'desc')->paginate(10);
    }
}

