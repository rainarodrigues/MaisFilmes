<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

Class Filme extends Model{
public $timestamps = false;
protected $fillable =['nome'];
}


 ?>