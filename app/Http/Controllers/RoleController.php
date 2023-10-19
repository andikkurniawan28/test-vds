<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use App\Http\Requests\RoleStoreRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Role::all();
        return view("role.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("role.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request)
    {
        Role::create($request->all());
        ActivityLog::write("Create Role", NULL);
        return redirect()->route("role.index")->with("success", "Data has been created !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Role::whereId($id)->get()->last();
        return view("role.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Role::whereId($id)->update($request->except(["_token", "_method"]));
        ActivityLog::write("Update Role", NULL);
        return redirect()->route("role.index")->with("success", "Data has been updated !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ActivityLog::write("Delete Role", NULL);
        Role::whereId($id)->delete();
        return redirect()->route("role.index")->with("success", "Data has been deleted !");
    }
}
