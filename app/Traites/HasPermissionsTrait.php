<?php

namespace App\Traites;
use App\Models\Permission;
use App\Models\Role;

trait HasPermissionsTrait{
    public function getAllPermissions($premission){
        return Permission::whereIn('name',$premission)->get();
    }
    public function hasPermissions($premission){
        return (bool) $this->permission::whereIn('name',$premission)->count();
    }

    public function hasRole(...$roles){
        foreach($roles as $role){
            if($this->roles->contains('name',$name)){
                 return true;
            }  
        }
        return false;
    }
    public function hasPermissionsTo($permissions){
        return $this->hasPermissionThroughRole($permissions) || $this->hasPermissions($permissions);
    }
    public function hasPermissionThroughRole($permissions){
        foreach($permissions->roles as $role){
            if($this->roles->contains($role)){
                 return true;
            }  
        }
        return false;
    }

    public function givePermmisionTo(...$permissions) {
        $permissions = $this->getAllPermissions($permissions);
        if($permissions == null){
            return false;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }
    
    public function permissions(){
        return $this->belongTomany(Permission::class,'users_permissions');
    }
    public function roles(){
        return $this->belongTomany(Role::class,'users_roles');
    }

}