
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
}