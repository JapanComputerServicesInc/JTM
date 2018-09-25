@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">端末新規登録確認</h1>
            <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_complete', ['id'=>$terminal_management->id]) }}">
                @csrf

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                            <div class="col-md-4">
                                <p>{{ $terminal_management->status->name }}</p>
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                            <div class="col-md-4">
                                <p>{{ $terminal_management->pc_name }}</p>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->approval_no )) {
                                    <p>{{ $terminal_management->approval_no }}</p>
                                    }
                                @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-user"></i>氏名</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->employee->name )) {
                                    <p>{{ $terminal_management->employee->name }}</p>
                                    }
                                @endif
                            </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                            <div class="col-md-4">
                                <p>{{ $terminal_management->depository->name }}</p>
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                            <div class="col-md-4">
                                <p>{{ $terminal_management->terminal_info->name }}</p>
                            </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                            <div class="col-md-4">
                                <p>{{ $terminal_management->serial_no }}</p>
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->cpu->name)) {
                                        <p>{{ $terminal_management->cpu->name}}</p>
                                    }
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->memory->name)) {
                                    <p>{{ $terminal_management->memory->name }}</p>
                                    }
                                @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->hdd->name)) {
                                    <p>{{ $terminal_management->hdd->name }}</p>
                                    }
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fab fa-apple"></i>OS</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->os->name)) {
                                    <p>{{ $terminal_management->os->name }}</p>
                                    }
                                    @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fab fa-windows"></i>Office</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->office_information->name)) {
                                    <p>{{ $terminal_management->office_information->name }}</p>
                                    }
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->memo)) {
                                    <p>{{ $terminal_management->memo }}</p>
                                    }
                                @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                            <div class="col-md-4">
                                @if (isset($terminal_management->qr_code)) {
                                    <p>{{ $terminal_management->qr_code }}</p>
                                    }
                                @endif
                            </div>
                    </div>
                    <div class="row text-center">
                      <button type="submit" class="btn btn-round btn-default">登録画面へ戻る</button>
                      <button type="submit" class="btn btn-round btn-primary">登録</button>
                    </div>
                </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->




@endsection
