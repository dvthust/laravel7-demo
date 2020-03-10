<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const ACTIVE_YES = 1;
    const ACTIVE_NO  = 0;

    const HOT_YES    = 1;
    const HOT_NO     = 0;

    const SORT_ORDER_ASC    = 1;
    const SORT_ORDER_DESC   = 2;
    const SORT_UPDATED_DESC = 3;
    const SORT_UPDATED_ASC  = 4;
    const SORT_ABC_ASC      = 5;
    const SORT_ABC_DESC     = 6;
    const SORT_CREATED_DESC = 7;
    const SORT_CREATED_ASC  = 8;

    const SORT_ARR          = [
        self::SORT_ORDER_ASC    => 'Thứ tự tăng dần',
        self::SORT_ORDER_DESC   => 'Thứ tự giảm dần',
        self::SORT_UPDATED_DESC => 'Thời gian cập nhật mới nhất',
        self::SORT_UPDATED_ASC  => 'Thời gian cập nhật cũ nhất',
        self::SORT_ABC_ASC      => 'Thứ tự ABC tăng dần',
        self::SORT_ABC_DESC     => 'Thứ tự ABC giảm dần',
        self::SORT_CREATED_DESC => 'Thời gian tạo mới nhất',
        self::SORT_CREATED_ASC  => 'Thời gian tạo cũ nhất',
    ];

    /**
     * The table used by the model
     * @var string
     */
    protected $table = "posts";

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'image',
        'user_id',
        'category_id',
        'title',
        'slug',
        'short_des',
        'content',
        'rating',
        'hot',
        'order',
        'status',
        'view_count',
        'vote_count',
        'like_count',
        'updated_by',
        'created_by',
        'active'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
