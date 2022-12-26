<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Container;
use Illuminate\Http\Request;
use Mockery\Matcher\Contains;

class ContainerController extends Controller
{
     public function index()
    {
        $containers = Container::where('softDeletes',1)->get();
        return view('admin.container.index', compact('containers'));
    }
    public function create()
    {
        $containers = Container::where('softDeletes',1)->get();
        return view('admin.container.create', compact('containers'));
    }
    public function store(Request  $request)
    {
        $request->validate([
            'bl_number'=> 'required|unique:containers,bl_number,',
            'container_no'=> 'required',
            'c_size'=> 'required',
            'seal_no'=> 'required',
            'vessel_name'=> 'required',
            'voyage'=> 'required',
            'place_receipt'=> 'required',
            'place_loading'=> 'required',
            'port_discharge'=> 'required',
            'final_destination'=> 'required',
            'comidity'=> 'required',
            'etd'=> 'required',
            'eta'=> 'required',
            'shipped_board'=> 'required',
            'bl_type'=> 'required',
            'issue_date'=> 'required',
            'location'=> 'required',
            'status'=> 'required',
        ]);
        $store = new Container();
        $store->bl_number = $request->bl_number;
        $store->container_no = $request->container_no;
        $store->c_size = $request->c_size;
        $store->seal_no = $request->seal_no;
        $store->vessel_name = $request->vessel_name;
        $store->voyage = $request->voyage;
        $store->place_receipt = $request->place_receipt;
        $store->place_loading = $request->place_loading;
        $store->port_discharge = $request->port_discharge;
        $store->final_destination = $request->final_destination;
        $store->comidity = $request->comidity;
        $store->etd = $request->etd;
        $store->eta = $request->eta;
        $store->shipped_board = $request->shipped_board;
        $store->bl_type = $request->bl_type;
        $store->issue_date = $request->issue_date;
        $store->location = $request->location;
        $store->status = $request->status;
        $store->save();
        $notification = array(
            'message' => 'Container Data Added Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification );
    }
    public function edit($id)
    {
        $edit = Container::find($id);
        $containers = Container::where('softDeletes',1)->get();
        return view('admin.container.edit', compact('edit', 'containers'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'bl_number'=> 'required|unique:containers,bl_number,'.$id,
            'container_no'=> 'required',
            'c_size'=> 'required',
            'seal_no'=> 'required',
            'vessel_name'=> 'required',
            'voyage'=> 'required',
            'place_receipt'=> 'required',
            'place_loading'=> 'required',
            'port_discharge'=> 'required',
            'final_destination'=> 'required',
            'comidity'=> 'required',
            'etd'=> 'required',
            'eta'=> 'required',
            'shipped_board'=> 'required',
            'bl_type'=> 'required',
            'issue_date'=> 'required',
            'location'=> 'required',
        ]);
        $update = Container::find($id);
        $update->bl_number = $request->bl_number;
        $update->container_no = $request->container_no;
        $update->c_size = $request->c_size;
        $update->seal_no = $request->seal_no;
        $update->vessel_name = $request->vessel_name;
        $update->voyage = $request->voyage;
        $update->place_receipt = $request->place_receipt;
        $update->place_loading = $request->place_loading;
        $update->port_discharge = $request->port_discharge;
        $update->final_destination = $request->final_destination;
        $update->comidity = $request->comidity;
        $update->etd = $request->etd;
        $update->eta = $request->eta;
        $update->shipped_board = $request->shipped_board;
        $update->bl_type = $request->bl_type;
        $update->issue_date = $request->issue_date;
        $update->location = $request->location;
        $update->save();
        $notification = array(
            'message' => 'Data Has been Updated Succesfully!',
            'alert-type' => 'success'
        );
        return redirect('/admin/container/create')->with($notification);
    }
    public function destroy($id)
    {
        $delete = Container::find($id);
        $delete->softDeletes = 0;
        $delete->save();
        $notification = array(
            'message' =>  'Data Hasbeen Delete Successfully Remove it!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function show($id)
    {
        $show = Container::find($id);
        return view('admin.container.show', compact('show'));
    }
}