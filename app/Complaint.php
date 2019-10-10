<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{

  protected $fillable = [
    'informer_id',
    'denounced_id',
    'description',
    'department_id',
  ];

  public function informer () {
    return $this->belongsTo(User::class);
  }

  public function denounced () {
    return $this->belongsTo(User::class);
  }

  public function department () {
    return $this->belongsTo(Department::class);
  }

  public function statuses()
  {
    return $this->belongsToMany(Status::class, 'status_complaints');
  }
}
