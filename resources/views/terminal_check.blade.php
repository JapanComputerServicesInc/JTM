@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">端末新規登録確認</h1>
            <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_create') }}">
                @csrf

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                         <div class="col-md-4">
                        {{ Form::label('status_name',$status_name,['class' =>"@if($status_id==1)label label-success label-mini @else label label-danger label-mini @endif"]) }}
                        <label class="col-md-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                            <div class="col-md-4">
                                <p name="pc_name">{{ $pc_name }}</p>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                            <div class="col-md-4">
                                @if (isset($approval_no ))
                                    <p name="approval_no">{{ $approval_no }}</p>

                                @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-user"></i>氏名</label>
                            <div class="col-md-4">
                                @if (isset($employee_name ))
                                    <p name="employee">{{ $employee_name }}</p>

                                @endif
                            </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                            <div class="col-md-4">
                                <p name="depositories_name">{{ $depositories_name }}</p>
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                            <div class="col-md-4">
                                <p name="product_name">{{ $product_name }}</p>
                            </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                            <div class="col-md-4">
                                <p name="serial_no">{{ $serial_no }}</p>
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>モデル名</label>
                            <div class="col-md-4">
                                @if (isset($model_name))
                                    <p name="model_name">{{ $model_name }}</p>
                                @endif
                            </div>

                        <label class="col-md-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                            <div class="col-md-4">
                                @if (isset($cpu_name))
                                        <p name="cpu_name">{{ $cpu_name}}</p>

                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                            <div class="col-md-4">
                                @if (isset($memories_name))
                                    <p name="memories_name">{{ $memories_name }}</p>

                                @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                            <div class="col-md-4">
                                @if (isset($hdd_name))
                                    <p name="hdd_name">{{ $hdd_name }}</p>

                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fab fa-apple"></i>OS</label>
                            <div class="col-md-4">
                                @if (isset($os_name))
                                    <p name="os_name">{{ $os_name }}</p>

                                    @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fab fa-windows"></i>Office</label>
                            <div class="col-md-4">
                                @if (isset($office_name))
                                    <p name="office_name">{{ $office_name }}</p>

                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                            <div class="col-md-4">
                                @if (isset($memo))
                                    <p name="memo">{{$memo}}</p>

                                @endif
                            </div>
                        <label class="col-md-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                            <div class="col-md-4">
                                @if (isset($qr_code))
                                    <p name="qr_code">{{$qr_code}}</p>

                                @endif
                            </div>
                    </div>
                    <div class="row text-center">
                      <a class="btn btn-round btn-default" href="{{route('terminal_new')}}">登録画面へ戻る</a>
                      <button type="submit" class="btn btn-round btn-primary">登録</button>
                    </div>
                </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->




@endsection
