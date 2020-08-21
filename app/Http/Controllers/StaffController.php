<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;

class StaffController extends Controller
{
    //Index
    public function index(Request $request){

        $search = $request->get('search');        
        if (!empty($search)) {
        //กรณีมีข้อมูลที่ต้องการ search จะมีการใช้คำสั่ง where และ orWhere
            $staffs = Staff::where('name', 'LIKE', "%$search%")
                ->orWhere('age', 'LIKE', "%$search%")
                ->orWhere('salary', 'LIKE', "%$search%")
                ->orWhere('phone', 'LIKE', "%$search%")
                ->orWhere('id', 'LIKE', "%$search%")
                ->get();
        }
        else {
        $staffs = Staff::get();
        }        
        return view("staff/index",compact('staffs') );
    }

    public function create(){
        return view('staff/create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        Staff::create($requestData);
        return redirect('staff');

    }

    public function show($id)
    {
        $staffs = Staff::findOrFail($id);
        return view('staff.show', compact('staffs'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();        
        $staff = Staff::findOrFail($id);
        $staff->update($requestData);
        return redirect('staff');

    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));

    }

    public function destroy($id)
    {
        Staff::destroy($id);
        return redirect('staff');

    }
}
