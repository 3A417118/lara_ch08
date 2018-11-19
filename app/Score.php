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
        return $query -> orderBy('scores.total','DESC');

    }
         public function scopeOrderBySubject($query){
        return $query -> orderBy('scores.chinese','DESC')
                      -> orderBy('scores.english','DESC')
                      -> orderBy('scores.math','DESC');

    }
}
