<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
use \App\Score;
class Student extends Model
{
    //
	protected $table = 'students';
	
    public function score(){
        return $this -> hasOne(Score::class);
    }
	public function user(){
	    return $this -> belongsTo(User::class);
    }

}