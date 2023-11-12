<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentTask extends Model
{
    use HasFactory;

    protected $guared = ['id'];

    public function task_list(){
        return $this->belongsTo(TaskList::class, 'task_list_id', 'id');
    }
}
