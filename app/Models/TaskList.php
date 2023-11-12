<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;

    protected $guared = ['id'];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function daily_task(){
        return $this->belongsTo(DailyTask::class, 'daily_task_id', 'id');
    }

    public function attachment(){
        return $this->hasMany(AttachmentTask::class, 'task_list_id', 'id');
    }
}
