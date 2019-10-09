<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $fillable = [
  ];

  public function complaints()
  {
    return $this->belongsToMany(Complaint::class, 'status_complaints');
  }
}
