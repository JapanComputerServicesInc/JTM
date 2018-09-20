@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">端末新規登録</h1>
            <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                    <div class="radio col-sm-10">
                        <label>
                            <input type="radio" name="status" id="optionsRadios1" value="1" checked>使用中
                        </label>
                        <label>
                            <input type="radio" name="status" id="optionsRadios2" value="2">未使用
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                    <div class="col-md-4">
                        {{Form::text('pc_name',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                    </div>
                    <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                    <div class="col-md-4">
                        {{Form::text('approval_no',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-user"></i>氏名</label>
                    <div class="col-md-4">
                        <select class="form-control" name="employee_name" value="{{ old('employee_name') }}" placeholder = "選択してください" data-live-search="true">

                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name.'('.$employee->department->name.')'}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-md-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                    <div class="col-md-4">
                        {{ Form::select('depository', $depositories, null, ['placeholder' => '選択してください', 'class' => 'form-control', 'data-live-search' => 'true']) }}

                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                    <div class="col-md-4">
                        <select class="form-control" name="product_name" value="{{ old('product_name') }}" placeholder = "選択してください" required>
                        @foreach($terminal_info as $t_i)
                            <option value="{{$t_i->id}}">{{$t_i->name.'('.$t_i->producer.')'}}</option>
                        @endforeach
                        </select>
                    </div>

                    <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                    <div class="col-md-4">
                        {{Form::text('serial_no',null,['class' => 'form-control', 'placeholder' => '入力してください','data-live-search' => 'true'])}}

                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>モデル名</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="model_name" value="{{ old('model_name') }}" placeholder="入力してください">
                    </div>
                    <label class="col-md-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                    <div class="col-md-4">
                        {{ Form::select('cpu', $cpu, null, ['placeholder' => '選択してください', 'class' => 'form-control','data-live-search' => 'true']) }}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                    <div class="col-md-4">
                        {{ Form::select('memory', $memories, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                    </div>
                    <label class="col-md-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                    <div class="col-md-4">
                        {{ Form::select('hdd', $hdd, null, ['placeholder' => '選択してください', 'class' => 'form-control','data-live-search' => 'true']) }}
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fab fa-apple"></i>OS</label>
                    <div class="col-md-4">
                        {{ Form::select('os', $os, null, ['placeholder' => '選択してください', 'class' => 'form-control','data-live-search' => 'true']) }}
                    </div>
                    <label class="col-md-2 control-label"><i class="fab fa-windows"></i>Office</label>
                    <div class="col-md-4">
                        {{ Form::select('office_info', $office_info, null, ['placeholder' => '選択してください', 'class' => 'form-control','data-live-search' => 'true']) }}
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                    <div class="col-md-4">
                        {{Form::text('memo',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                    </div>
                    <label class="col-md-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                    <div class="col-md-4">
                        {{Form::text('qr_code',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                    </div>
                </div>


                <button type="submit" class="center-block btn btn-round btn-primary">確認画面へ</button>
            </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->
@endsection
