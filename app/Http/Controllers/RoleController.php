<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;
use Validator;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('admin.roles.index', compact('roles'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "<pre>"; print_r($request->all()); die;
        $rules = [
            'title' => 'required|string|max:255',
            'status' => 'required|boolean',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
        }
        $data = new Role();
        $data->title = $request->title;
        $data->status = $request->status;
        $data->save();
        return response()->json(['status'=>true,'message'=>'Record Successfully add!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|unique:roles|max:255',
            // Add more validation rules as needed
        ]);

        // Update the role instance
        $role->update($validatedData);

        // Redirect to the index page with success message
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        // Delete the role
        $role->delete();

        // Redirect to the index page with success message
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
