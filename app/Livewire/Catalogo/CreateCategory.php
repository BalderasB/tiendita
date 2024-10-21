<?php

namespace App\Livewire\Catalogo;

use App\Models\Category;

use Livewire\Component;

class CreateCategory extends Component
{
    public $categories;
    public $name;
    public $description;
    public $title;
    public function mount (Category $cat){
        //$this->categories=Category::all();
        //$this->name = $cat->name;
        //$this->description = $cat->description;
    }
    public function render()
    {
        $this->categories=Category::all();
        return view('livewire.catalogo.create-category');
    }

    public function enviar(){
        $category = new Category();
        $category->name = $this->name;
        $category->name =$this->name;
        $category->description =$this->description;
        $category->save();
        $this->reset(['name', 'description']); // Resetear todo el contenido de algún formulario, una vez que guarde las resetea

        //$cat=Category::find($this->title);
        //$this->name = $cat->name;
        //$this->description = $cat->description;
        //dd('Info',$this->title);
    }
}
