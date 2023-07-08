<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [];
    public $newComment;
    public $newName;


    public function addComments(){
        array_unshift($this->comments,[
            "body"=>$this->newComment,
            "created_at"=>Carbon::now(),
            "created_by"=>$this->newName
        ]);

    }
    public function render()
    {
        return view('livewire.comments',['comments'=>$this->comments]);
    }
}
