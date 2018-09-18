@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末新規登録</h4>
            <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                    <div class="radio col-sm-10">
                        <label>
                            <input type="radio" name="status" id="optionsRadios1" value="{{ old('status') }}" checked>使用中
                        </label>
                        <label>
                            <input type="radio" name="status" id="optionsRadios2" value="{{ old('status') }}">未使用
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pc_name" value="{{ old('pc_name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="approval_no" value="{{ old('approval_no') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-user"></i>氏名</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="employee_name" value="{{ old('employee_name') }}">
                            <option>-</option>
                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-building"></i>部門</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="department" value="{{ old('department') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="depository" value="{{ old('depository') }}">
                            <option>-</option>
                            @foreach($depositories as $depository)
                              <option value="{{$depository->id}}">{{$depository->depository}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-gavel"></i>メーカー名</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="producer" value="{{ old('producer') }}">
                        <option>-</option>
                        @foreach($terminal_info as $t_i)
                            <option value="{{$t_i->id}}">{{$t_i->producer}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="product_name" value="{{ old('product_name') }}">
                        <option>-</option>
                        @foreach($terminal_info as $t_i)
                            <option value="{{$t_i->id}}">{{$t_i->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="serial_no" value="{{ old('serial_no') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-list-ol"></i>モデル名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="model_name" value="{{ old('model_name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpu" value="{{ old('cpu') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="memory" value="{{ old('memory') }}">
                        <option>-</option>
                        @foreach($memories as $memory)
                            <option value="{{$memory->id}}">{{$memory->memory}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="hdd" value="{{ old('hdd') }}">
                        <option>-</option>
                        @foreach($hdd as $h)
                            <option value="{{$h->id}}">{{$h->hdd}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fab fa-apple"></i>OS</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="os" value="{{ old('os') }}">
                        <option>-</option>
                        @foreach($os as $o)
                            <option value="{{$o->id}}">{{$o->os}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fab fa-windows"></i>Office</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="office_info" value="{{ old('office_info') }}">
                            <option>-</option>
                            @foreach($office_info as $oi)
                              <option value="{{$oi->id}}">{{$oi->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="memo" value="{{ old('memo') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="qr_code" value="{{ old('qr_code') }}">
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
