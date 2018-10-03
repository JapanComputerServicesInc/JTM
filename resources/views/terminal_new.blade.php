@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">端末新規登録</h1>
            <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('terminal_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                    <div class="radio col-sm-10">
                        <label>
                             {{ Form::radio('status', '1',true) }}
                            使用中
                        </label>
                        <label>
                            {{ Form::radio('status', '2') }}
                            未使用
                        </label>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                    <div class="col-md-4">
                        @if ($errors->has('pc_name'))
                            <div class="has-error">
                                {{Form::text('pc_name',null,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                <span class="text-danger">{{$errors->first('pc_name')}}</span>
                            </div>
                        @else
                            {{Form::text('pc_name',null,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                        @endif
                    </div>
                    <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                    <div class="col-md-4">
                        {{Form::text('approval_no',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-user"></i>氏名</label>
                        <div class="col-md-4">
                            {{ Form::select('employee_name', $employees, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                        </div>
                    <label class="col-md-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-md-4">
                            @if ($errors->has('depository'))
                                <div class="has-error">
                                    {{ Form::select('depository', $depositories, null, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                                      <span class="text-danger">
                                        {{$errors->first('depository')}}</span>
                                </div>
                            @else
                                {{ Form::select('depository', $depositories, null, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                            @endif
                        </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-md-4">
                            @if ($errors->has('product_name'))
                                <div class="has-error">
                                {{ Form::select('product_name', $terminal_informations, null, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                <span class="text-danger">
                                    {{$errors->first('product_name')}}</span>
                                </div>
                            @else
                                {{ Form::select('product_name', $terminal_informations, null, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                            @endif
                        </div>
                    <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                        <div class="col-md-4">
                            @if ($errors->has('serial_no'))
                                <div class="has-error">
                                {{Form::text('serial_no',null,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                    <span class="text-danger">
                                        {{$errors->first('serial_no')}}</span>
                                    </div>
                            @else
                                {{Form::text('serial_no',null,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                            @endif
                        </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>モデル名</label>
                        <div class="col-md-4">
                            @if ($errors->has('model_name'))
                                <div class="has-error">
                                {{ Form::text('model_name', null, ['placeholder' => '必須項目です', 'class' => 'form-control']) }}
                                    <span class="text-danger">
                                        {{$errors->first('model_name')}}</span>
                                    </div>
                            @else
                                {{ Form::text('model_name', null, ['placeholder' => '必須項目です', 'class' => 'form-control']) }}
                            @endif
                        </div>
                    <label class="col-md-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                        <div class="col-md-4">
                            {{ Form::select('cpu', $cpu, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => 'true']) }}
                        </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                        <div class="col-md-4">
                            {{ Form::select('memory', $memories, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                        </div>
                    <label class="col-md-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-md-4">
                            {{ Form::select('hdd', $hdd, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => 'true']) }}
                        </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-md-4">
                            {{ Form::select('os', $os, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => 'true']) }}
                        </div>
                    <label class="col-md-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-md-4">
                            {{ Form::select('office_info', $office_info, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => 'true']) }}
                        </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                        <div class="col-md-4">
                            {{Form::text('memo',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                        </div>
                    {{-- <label class="col-md-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                        <div class="col-md-4">
                            {{Form::text('qr_code',null,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                        </div> --}}
                </div>


                <button id="check" type="button" class="center-block btn btn-round btn-success">登録</button>
            </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->
@endsection

@section('scripts')
    <script>
    $('#check').click((event) => {
        swal({
            title: 'この情報で登録しますか?',
            text: "",
            icon: 'warning',
            buttons: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $('#form1').submit();
          }
        });

    });
    </script>
@endsection
