@extends('layouts.app')

@section('content')
    @if (Session::has('update_message'))
        <div class="alert alert-success" role="alert">{{ Session::get('update_message') }}</div>
    @endif
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末編集・削除</h4>
                <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_update',['id' => $terminal_managements->id]) }}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">利用状況</label>
                     <div class="radio">
                         @if($terminal_managements->status_id==1)
                             <label>{{ Form::radio('status', '1',true) }}使用中</label>
                             <label>{{ Form::radio('status', '2') }}未使用</label>
                         @else
                             <label>{{ Form::radio('status', '1') }}使用中</label>
                             <label>{{ Form::radio('status', '2',true) }}未使用</label>
                         @endif
                    </div>
                   </div>



                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                        <div class="col-md-4">
                            @if ($errors->has('pc_name'))
                                <div class="has-error">
                                    {{Form::text('pc_name',$terminal_managements->pc_name,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                    <span class="text-danger">{{$errors->first('pc_name')}}</span>
                                </div>
                            @else
                                {{Form::text('pc_name',$terminal_managements->pc_name,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                            @endif
                        </div>

                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                        <div class="col-md-4">
                            {{Form::text('approval_no',$terminal_managements->approval_no,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-user"></i>氏名</label>
                        <div class="col-md-4">
                            {{ Form::select('employee', $employees,  $terminal_managements->employees_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                      </div>

                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-md-4">
                            @if ($errors->has('depository'))
                                <div class="has-error">
                                    {{ Form::select('depository', $depositories, $terminal_managements->depositories_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                                      <span class="text-danger">
                                        {{$errors->first('depository')}}</span>
                                </div>
                            @else
                                {{ Form::select('depository', $depositories, $terminal_managements->depositories_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                            @endif
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-md-4">
                            @if ($errors->has('product_name'))
                                <div class="has-error">
                                {{ Form::select('product_name', $terminal_informations, $terminal_managements->terminal_informations_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                <span class="text-danger">
                                    {{$errors->first('product_name')}}</span>
                                </div>
                            @else
                                {{ Form::select('product_name', $terminal_informations, $terminal_managements->terminal_informations_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                            @endif
                      </div>

                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                        <div class="col-md-4">
                            @if ($errors->has('serial_no'))
                                <div class="has-error">
                                {{Form::text('serial_no',$terminal_managements->serial_no,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                    <span class="text-danger">{{$errors->first('serial_no')}}</span>
                                </div>
                            @else
                                {{Form::text('serial_no',$terminal_managements->serial_no,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-list-ol"></i>モデル名</label>
                            <div class="col-md-4">
                                @if ($errors->has('model_name'))
                                    <div class="has-error">
                                    {{ Form::text('model_name', $terminal_managements->model_name, ['placeholder' => '必須項目です', 'class' => 'form-control']) }}
                                        <span class="text-danger">
                                            {{$errors->first('model_name')}}</span>
                                        </div>
                                @else
                                    {{ Form::text('model_name', $terminal_managements->model_name, ['placeholder' => '必須項目です', 'class' => 'form-control']) }}
                                @endif
                            </div>

                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                        <div class="col-md-4">
                        {{ Form::select('cpu', $cpus, $terminal_managements->cpu_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                        <div class="col-md-4">
                          {{ Form::select('memory', $memories, $terminal_managements->memories_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                      </div>

                        <label class="col-lg-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-md-4">
                          {{ Form::select('hdd', $hdds, $terminal_managements->hdd_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-md-4">
                          {{ Form::select('os', $oss, $terminal_managements->os_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                      </div>

                        <label class="col-lg-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-md-4">
                          {{ Form::select('office_information', $office_informations, $terminal_managements->office_informations_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                        <div class="col-md-4">
                            {{Form::text('memo',$terminal_managements->memo,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                        </div>

                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                        <div class="col-md-4">
                            {{Form::text('qr_code',$terminal_managements->qr_code,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                        </div>
                    </div>

                    <div class="row text-center">
                      <button type="submit" class="btn btn-round btn-success">編集</button>
                      <button id="delete" type="button" class="btn btn-round btn-danger">削除</button>
                  </div>
              </form>
              <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('terminal_destroy',['id' => $terminal_managements->id]) }}">
                  @csrf
                  @method('delete')
              </form>
        </div>
    </div>

</div>

@endsection

@section('scripts2')
    <script>
    $('#delete').click((event) => {
        swal({
            title: 'この情報を削除しますか?',
            text: "消すともとに戻すことができません",
            icon: 'warning',
            buttons: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $('#form1').submit();
          }
        });
    })
    </script>
@endsection
