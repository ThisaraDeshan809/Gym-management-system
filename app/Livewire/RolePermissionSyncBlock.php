<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSyncBlock extends Component
{
    public $roleId;
    public $role;
    public $permissions;

    public function mount($roleId)
    {
        $this->roleId = $roleId;
        $this->role = Role::findOrFail($roleId);
        $this->permissions = Permission::all();
    }

    public function togglePermission($permissionId)
    {
        $permission = Permission::findOrFail($permissionId);

        if ($this->role->hasPermissionTo($permission->name)) {
            $this->role->revokePermissionTo($permission->name);
        } else {
            $this->role->givePermissionTo($permission->name);
        }

        // Refresh role permissions
        $this->role->refresh();
    }

    public function render()
    {
        return view('livewire.role-permission-sync-block');
    }
}
