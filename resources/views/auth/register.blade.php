@extends('layouts.app')

@section('bodyClass', 'small-navigation')

@section('title', 'Register |')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ลงทะเบียนผู้ใช้งาน') }}</div>

                <div class="card-body">
                    <h3 text-center>โปรดติดต่อผู้ดูแลระบบ เพื่อสมัครใช้งาน</h3>
                    <p></p>
                    <p>
                        ผู้ดูแลระบบ งานคอมพิวเตอร์ 343,344<br>
                        ฝ่ายพัสดุ 338
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
