@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">端末新規登録確認</h1>
            <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_complete', ['id'=>$terminal_managements->id]) }}">
                @csrf

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                        <p>{{ $terminal_managements->status_id }}</p>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                        <p>{{ $terminal_managements->pc_name }}</p>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                        <p>{{ $terminal_managements->approval_no }}</p>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-user"></i>氏名</label>
                        <div class="col-sm-10">
                            <p>{{ $terminal_managements->employee->name.'('.$employee->department->name.')' }}</p>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-sm-10">
                            <p>{{ $terminal_managements->depository->name }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-sm-10">
                            <p>{{ $terminal_managements->terminal_info->name }}</p>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                        <p>{{ $terminal_managements->serial_no }}</p>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                        <p>{{ $terminal_managements->cpu->name }}</p>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                        <div class="col-sm-10">
                         <p>{{ $terminal_managements->memory->name }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-sm-10">
                            <p>{{ $terminal_managements->hdd->name }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-sm-10">
                            <p>{{ $terminal_managements->os->name }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-sm-10">
                            <p>{{ $terminal_managements->office_info->name }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                        <p>{{ $terminal_managements->memo }}</p>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                        <p>{{ $terminal_managements->qr_code }}</p>
                    </div>
                    <div class="row text-center">
                      <button type="submit" class="btn btn-round btn-success">登録画面へ戻る</button>
                      <button type="submit" class="btn btn-round btn-primary">登録</button>
                    </div>
                </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->




@endsection
