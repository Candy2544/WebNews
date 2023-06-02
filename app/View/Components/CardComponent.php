<?php

namespace App\View\Components;

use Closure;
use App\Models\Info;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create a new component instance.
     */


        
    public function __construct()
    {
        $getinfo = Info::all();
        $row = $getinfo ;
            $title = $row-> title;
            $content = $row -> content;
            $other_name = $row -> other_name;
            $create_at = $row -> create_at;
        
        return view('component.card-component',compact('title','content','other_name','create_at'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
            return view('component.card-component');
    }
}
