<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class CommentForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $post;
    
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.comment-form');
    }
}
