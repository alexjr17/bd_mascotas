<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public $permissions;
    public function index(Request $request) {
        $roles =  Role::all();
        $permissions = Permission::all();
        return response()->json(['roles' => $roles, 'permissions' => $permissions]);
    }
    public function permission($id){
        $role = Role::with(['permissions'])->find($id);
        return response()->json($role->permissions);
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);
        $role = Role::create($request->all());
        return response()->json($role);
    }
    public function permissionsStore(Request $request, $id){
        $role = Role::with(['permissions'])->find($id);
        $role->permissions()->sync($request->all());
        return response()->json($role->permissions);
    }
    public function destroy($id){
        $role = Role::find($id);        
        if ($role->delete()) {
            return response()->json(['role' => true]);
        } else {
            return response()->json(['role' => false]);
        }       
        
    }
}
