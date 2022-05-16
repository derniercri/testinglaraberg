<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class DeletePost extends Component
{
    public $show;
    public $post;

    public function mount() {
        $this->show = false;
    }

    public function doShow() {
        $this->show = true;
    }

    public function doClose() {
        $this->show = false;
    }


    public function deletePost()
    {
        $this->post->delete();
        session()->flash('message', 'Post Deleted Successfully');
        return redirect()->route('posts.index');
        $this->doClose();
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}
