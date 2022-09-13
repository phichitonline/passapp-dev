<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repair;
use App\Models\Durable;
use Illuminate\Support\Facades\DB;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check_repair_status = DB::connection('mysql')->select('
            SELECT repair_date,repair_status FROM repairs
            WHERE id = (SELECT MAX(id) FROM repairs WHERE durable_id = '.$request->durable_id.')
            ');
        foreach($check_repair_status as $data) {
            $r_status = $data->repair_status;
            $r_date = $data->repair_date;
        }

        if (isset($r_status)) {
            if ($r_status == 1) {
                return redirect()->route('durable.show', $request->durable_id)
                                ->with('unsuccess', 'ครุภัณฑ์นี้ส่งซ่อมแล้วเมื่อ '.$r_date);
            } else if ($r_status == 2) {
                return redirect()->route('durable.show', $request->durable_id)
                                ->with('unsuccess', 'ช่างรับซ่อมครุภัณฑ์นี้แล้วเมื่อ '.$r_date.' อยู่ระหว่างการซ่อม... โปรดติดต่อช่างเพื่อสอบถาม');
            } else {
                Repair::create($request->all());
                Durable::where('id', $request->durable_id)->update(['status' => 3,'repair_status' => 'ส่งซ่อม '.$request->repair_date]);
                return redirect()->route('durable.show', $request->durable_id)
                                ->with('success', 'แจ้งซ่อมเรียบร้อยแล้ว');
            }
        } else {
            Repair::create($request->all());
            Durable::where('id', $request->durable_id)->update(['status' => 3,'repair_status' => 'ส่งซ่อม '.$request->repair_date]);
            return redirect()->route('durable.show', $request->durable_id)
                            ->with('success', 'แจ้งซ่อมเรียบร้อยแล้ว');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
