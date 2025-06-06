<?php

namespace App\Http\Livewire\Admin\Products;

use App\Traits\HasCrud;
use Livewire\Component;
use App\Traits\HasTable;
use App\Traits\HasStatus;
use App\Models\ProductCategory;
use App\Traits\HasPhotoUpload;
use Livewire\Attributes\Computed;

class Categories extends Component
{
           
use HasCrud;
use HasTable;
use HasStatus;
use HasPhotoUpload;



public $model = ProductCategory::class;
public $photo;
public $name_en;
public $name_ar;
public $slug;
public $description;
protected $write_permission='write category';


    public function closeModal()
    {
   
        $this->reset('name_en','name_ar','description','photo');
    }
    

 

    protected function rules()
    {
            return [
                            'name_ar' => 'required|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u',
                            'name_en' => 'required|regex:/^[\a-zA-Z0-9\s\-]+$/u',
                            'description' => 'nullable|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u',
                            'photo' => 'required|image|mimes:jpeg,png|max:1024', // 1MB Max
                        ];
    }

 

 public function store(){
 $validatedData= $this->validate();
 $this->storeRecord($this->model,$validatedData,'categories');
 }


 public function edit(int $id){
$this->edit_id = $id;
$edit = $this->model::find($id);
$this->name_ar  = $edit->name_ar ;
$this->name_en = $edit->name_en;
$this->slug = $edit->slug;
$this->description = $edit->description;


 }

 public function delete(){
    $record =$this->model::FindOrFail($this->edit_id);
   $this->deleteRecord($record);
    }

    
 public function update(){
    $validatedData= $this->validate();
    $record =$this->model::FindOrFail($this->edit_id);
   $this->updateRecord($record,$validatedData,'categories');
    }

  


    #[Computed]
    public function data(){
    return
    $this->model::where('name_en', 'like', '%'.$this->search.'%')->orderBy('id', $this->sortfilter)->paginate($this->perpage);
    }
    
    public function render()
    {
        return view('livewire.admin.products.categories');
    }
}
