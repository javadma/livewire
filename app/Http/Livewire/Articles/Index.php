<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $article = [
        'title' => 'this is article 1',
        'body' => 'this is body of article 1'
    ];
        return view('livewire.articles.index',compact('article'));
    }
}
