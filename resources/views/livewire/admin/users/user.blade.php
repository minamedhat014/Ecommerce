<div>
<x-app-table name=" List of users ">

  <x-slot name="header">
 @can ('write user')
<x-table-button icon="fa-solid fa-circle-plus" target="addUserModal" />
 @endcan
  </x-slot>
  
  <x-slot name="head">
    
    <th class=" col-1">ID</th>
    <th class=" col-2"> Name</th>
    <th class=" col-2"> Email </th>
    <th class=" col-2"> Phone Number </th>
    <th class=" col-1"> Profile </th>
    <th class=" col-2"> Role </th>
    <th class=" col-2">activation Staus </th>
    <th class=" col-2"> loging Staus </th>

    @can('write user')
    <th class=" col-3"> Actions</th>
    @endcan
    
  </x-slot>
  
  <x-slot name="body">
             @foreach($this-> admins as $admin)
                          <tr>
                          <td>{{$admin->id}}</td>
                          <td>{{$admin->name}} </td>
                          <td>{{$admin->email}}</td>
                          <td>{{$admin->phone}}</td>
                          <td> 
                            <img src="{{$admin->getFirstMediaUrl('profile','thumb')}}" alt="{{ $admin->name }}"  class="profile">
                        </td>
                        <td> {{$admin->getRoleNames()}}</td>
                        <td>
                            @if ($admin ->status ==1 )
                          <span class="dot-in ml-3"> </span> active
                          @else  
                          <span class="dot-out ml-3"> </span>  deactive 
                          @endif

                        </td>
                          <td>
                          @if(Auth::id() == $admin->id)
                          <span class="dot-in ml-3"> </span> 
                          @else  
                          <span class="dot-out ml-3"> </span>  
                          @endif
                          </td>

                          @can('write user')
                         <td>  
                          <div>
                            <button type="button" class="btn btn-default dropdown-toggle custom-button" data-toggle="dropdown">
                              Actions
                            </button>
                            <div class="dropdown-menu">       
                              <li><a data-bs-toggle="modal" class="dropdown-item" data-bs-target="#editUserModal" type="button" wire:click='edit({{$admin->id}})' ><i class="fa-solid fa-pen-to-square"></i> Edit </a> </li>             
                              <li><a data-bs-toggle="modal" class="dropdown-item"data-bs-target="#deleteUserModel" type="button"   wire:click='gettingId({{$admin->id}})' > <i class="fa-solid fa-trash danger"></i> Remove</a></li>       
                              <li><a data-bs-toggle="modal" class="dropdown-item"data-bs-target="#assignRole" type="button" wire:click='gettingId({{$admin->id}})' >  <i class="fa-solid fa-user-lock"></i> Assign Roles </a></li>                    
                              <li><a data-bs-toggle="modal" class="dropdown-item"data-bs-target="#removeRoles" type="button" wire:click='gettingId({{$admin->id}})' >  <i class="fa-solid fa-trash danger"></i> Remove Roles </a></li>                    
                              <li><a data-bs-toggle="modal" class="dropdown-item" type="button" wire:click='changeStatus({{$admin->id}})' ><i class="fa-solid fa-pen-to-square"></i> Change status</a> </li>               
                            </div>
                          </div>
                         </td>
                         @endcan
                        </tr>
                       
                        @endforeach  
  </x-slot>
  
  <x-slot name="footer">
    @include('livewire.admin.users.userModal')
    {{ $this->admins->links() }}
  
  </x-slot>
  </x-app-table>
  
</div>





