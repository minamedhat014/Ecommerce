<?php

namespace App\Http\Livewire\Admin\Users;

use App\Traits\HasCheckbox;
use App\Traits\HasCrud;
use App\Traits\HasTable;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{

       use HasTable;
       use HasCrud;
       use HasCheckbox;

        public $name;
        public $Role_id;
        protected $write_permission='write user';
    
    
    
        protected function rules()
        {
             return
             
             [ 'name' => 'required|min:3|regex:/^[a-zA-Z0-9\s\-]+$/u|unique:roles,name,'.$this ->Role_id,
                         ];
     
                        
     }
    
    
public function closeModal()
{
    $this->reset();
}
    

    public function mount(){
        $this->check_permission('view users');
    }
    
     public function store(){
        try{
     $this->check_permission($this->write_permission);
            $validatedData = $this->validate();
            Role::create($validatedData);
            successMessage();
            $this->close();
        }catch(\Exception $e){
           errorMessage($e);
        }
     }
    
     public function edit(int $id){
     $edit= Role::findOrFail($id);
    
     if($edit){
      $this->Role_id= $id;
      $this->name =$edit->name;
    
     }else{
      return redirect()->back();
     }
    
    
     }
   
    
     public function update(){
        $this->check_permission($this->write_permission);
        if( $this->Role_id > 1){
        try {
            $validatedData = $this->validate();

            Role::where('id',$this->Role_id)->update([
            'name'=>$validatedData['name']
            ]);
             successMessage();
             $this->close();
           }catch(\Exception $e){
              errorMessage($e);
           }
    }else{
       errorMessage("you can't change this role");
    }
       
    
     }
    
     public function deleteID(int $id){
        $this->Role_id = $id;
        }
       
        public function RoleID(int $id){
            $this->Role_id = $id;
            }
           
    public function syncPermissions(){
        $this->check_permission($this->write_permission);
        $validatedData = $this->validate(
            [
                'checked_ids' =>'required',
            ]);

        $role= Role::findOrFail($this->Role_id);
        $role->syncPermissions($validatedData['checked_ids']);
        successMessage();
        $this->close();
    }

    public function assignPermissions(){
        $this->check_permission($this->write_permission);
        $validatedData = $this->validate(
            [
                'checked_ids' =>'required',
            ]);

        $role= Role::findOrFail($this->Role_id);
        $role->givePermissionTo($validatedData['checked_ids']);
        successMessage();
        $this->close();
    }
     
     public function delete(){
        $this->check_permission($this->write_permission);
     if($this ->Role_id > 1)
        {
         Role::FindOrFail($this->Role_id)->delete();
     successMessage();
     $this->close();
        }
        else{
            errorMessage("you can't delete this role");
        }
    }
    

    public function render()
    {
        $permissions = Permission::all();
        $roles =Role::with('permissions')->where('name', 'like', '%'.$this->search.'%')->orderBy('id', $this->sortfilter)->paginate($this->perpage);
        return view('livewire.Admin.users.roles',compact('roles','permissions'));
    }
}
