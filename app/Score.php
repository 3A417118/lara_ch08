<?php
 
 namespace App;
 
 use Illuminate\Database\Eloquent\Model;
 use \App\Student;
 
 class Score extends Model
 {
     //
     protected $table = 'scores';
     
    public function student(){
       return $this->belongsTo(Student::class);
    }
     public function scopeOrderByTotal($query){
        return $query->orderBy('score.total','DESC');
    }
     public function scopeOrderBySubject($query){
        return $query->orderBy('score.chinese','DESC')
                    ->orderBy('score.english','DESC')
                    ->orderBy('score.math','DESC');
    }
}
