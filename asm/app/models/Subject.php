<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Subject extends Model{
    protected $table = 'subjects';

    public function quizs(){
        // return Quiz::where('subject_id', $this->id)->get();
        return $this->hasMany(Quiz::class, 'subject_id');
    }
}
?>