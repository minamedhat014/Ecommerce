<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\ecommerceInfo;
use App\Traits\HasCrud;
use Livewire\Component;
use App\Traits\HasTable;
use App\Traits\HasPhotoUpload;
use App\Traits\HasStatus;
use Livewire\Attributes\Computed;

class SiteInfo extends Component
{

use HasCrud;
use HasTable;
use HasPhotoUpload;
use HasStatus;



public $model = ecommerceInfo::class;
public $name;
public $slogan;
public $video_link;
public $discriptions;
public $key_words;
public $phone;
public $email;
public $address;
public $logo;
protected $write_permission='write system settings';


    public function closeModal()
    {
   
        $this->reset('name','discriptions','key_words','photo','phone','email','address','slogan','video_link');
    }
    

 

    protected function rules()
    {
            return [
                            'name' => 'required|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u|max:255',
                            'discriptions' => 'required|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u',
                            'key_words' => 'required|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u', 
                            'phone'=>'regex:/^\+?[0-9]{10,15}$/',
                            'email'=>'email',
                            'slogan' => 'required|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u',
                             'video_link' => 'required|url',
                            'address'=>'required|regex:/^[\p{Arabic}a-zA-Z0-9\s\-]+$/u',
                            'photo' => 'nullable|image|mimes:jpeg,png,pdf|max:1024',


                        ];
    }



 public function store(){
 $validatedData= $this->validate();
 $this->storeRecord($this->model,$validatedData,'site info');
 }


 public function edit(int $id){
$this->edit_id = $id;
$edit = $this->model::find($id);
$this->name = $edit->name;
$this->discriptions = $edit->discriptions;
$this->key_words = $edit->key_words;
$this->phone = $edit->phone;
$this->slogan = $edit->slogan;
$this->video_link = $edit->video_link;
$this->email = $edit->email;
$this->address = $edit->address;
$this->photo = $edit?->getFirstMediaUrl('site info');
 }

 public function delete(){
    $record =$this->model::FindOrFail($this->edit_id);
   $this->deleteRecord($record);
    }

    
 public function update(){
    $validatedData= $this->validate();
    $record =$this->model::FindOrFail($this->edit_id);
   $this->updateRecord($record,$validatedData,'site info');
    }

      
 public function addHeroImage(){
    $validatedData= $this->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,pdf|max:1024',
    ]);
    $record =$this->model::FindOrFail($this->edit_id);
    $record->clearMediaCollection('site hero');
    $record->addMedia($validatedData['photo'])->toMediaCollection('site hero');
    successMessage();
    }

  


    #[Computed]
    public function data(){
    return
    $this->model::with('media')->where('name', 'like', '%'.$this->search.'%')->orderBy('id', $this->sortfilter)->paginate($this->perpage);
    }
    public function render()
    {
        return view('livewire.admin.settings.site-info');
    }
}
