<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

  protected $fillable = [
  ];

  public function users()
  {
    return $this->hasMany(User::class);
  }

  public function company () {
    return $this->belongsTo(Company::class);
  }

  public function complaints()
  {
    return $this->hasMany(Complaint::class );
  }

}
