<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDO;

class Department extends Model
{

    protected $table = 'departments';

    protected $fillable = [
        'name', 'description', 'status', 'created_at', 'updated_at'
    ];

    public function getDepartment()
    {
        return DB::table('departments')
            ->select('id','name','description','status')
            ->orderBy('id', 'DESC')
            ->where('status', '1')
            ->paginate(12);
    }
}
