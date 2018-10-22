@extends('layouts.app')

@section('content')
    @if (Session::has('update_message'))
        <div class="alert alert-success" role="alert">{{ Session::get('update_message') }}</div>
    @endif
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            @if (Auth::guest())
                <h4 class="mb">端末詳細</h4>
            @else
                <h4 class="mb">端末編集・削除</h4>
            @endif
                <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_update',['id' => $terminal_managements->id]) }}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                            @if (Auth::guest())
                                <span class="@if($terminal_managements->status->id ==1)label label-success label-mini @else label label-danger label-mini @endif">{{$terminal_managements->status->name}}</span>
                            @else
                                 <div class="radio">
                                     @if($terminal_managements->status_id==1)
                                         <label>{{ Form::radio('status', '1',true) }}使用中</label>
                                         <label>{{ Form::radio('status', '2') }}未使用</label>
                                     @else
                                         <label>{{ Form::radio('status', '1') }}使用中</label>
                                         <label>{{ Form::radio('status', '2',true) }}未使用</label>
                                     @endif
                                </div>
                            @endif
                   </div>



                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                        <div class="col-md-4">
                            @if (Auth::guest())
                                <span>{{$terminal_managements->pc_name}}</span>
                            @else
                                @if ($errors->has('pc_name'))
                                    <div class="has-error">
                                        {{Form::text('pc_name',$terminal_managements->pc_name,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                        <label class="control-label" for="InputText3">{{ $errors->first('pc_name') }}</label>
                                    </div>
                                @else
                                    {{Form::text('pc_name',$terminal_managements->pc_name,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                @endif
                            @endif
                        </div>


                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                        <div class="col-md-4">
                            @if (Auth::guest())
                                <span>@if(isset($terminal_managements->approval_no)){{$terminal_managements->approval_no}}@endif</span>
                            @else
                                {{Form::text('approval_no',$terminal_managements->approval_no,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-user"></i>氏名</label>
                        <div class="col-md-4">
                            @if (Auth::guest())
                                <span>@if(isset($terminal_managements->employee->name)){{$terminal_managements->employee->name}}@endif</span>
                            @else
                                {{ Form::select('employee', $employees,  $terminal_managements->employees_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                            @endif
                      </div>

                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>{{$terminal_managements->depository->name}}</span>
                                @else
                                    @if ($errors->has('depository_name'))
                                        <div class="has-error">
                                            {{ Form::select('depository_name', $depositories, $terminal_managements->depositories_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                                              <label class="control-label" for="InputText3">{{ $errors->first('depository_name') }}</label>
                                        </div>
                                    @else
                                        {{ Form::select('depository_name', $depositories, $terminal_managements->depositories_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                                    @endif
                                @endif
                        {{-- <span class="input-group-btn">
                            <button type="button" class="btn btn-success col" id="send" data-toggle="tooltip" data-placement="top" title="新規登録する">
                                <i class="fas fa-clipboard"></i>
                            </button>
                        </span> --}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>{{$terminal_managements->terminal_info->name}}</span>
                                @else
                                    @if ($errors->has('product_name'))
                                        <div class="has-error">
                                        {{ Form::select('product_name', $terminal_informations, $terminal_managements->terminal_informations_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                        <label class="control-label" for="InputText3">{{ $errors->first('product_name') }}</label>
                                        </div>
                                    @else
                                        {{ Form::select('product_name', $terminal_informations, $terminal_managements->terminal_informations_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                    @endif
                                @endif
                        </div>

                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                        <div class="col-md-4">
                            @if (Auth::guest())
                                <span>{{$terminal_managements->serial_no}}</span>
                            @else
                                @if ($errors->has('serial_no'))
                                    <div class="has-error">
                                    {{Form::text('serial_no',$terminal_managements->serial_no,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                        <label class="control-label" for="InputText3">{{ $errors->first('serial_no') }}</label>
                                    </div>
                                @else
                                    {{Form::text('serial_no',$terminal_managements->serial_no,['class' => 'form-control', 'placeholder' => '必須項目です'])}}
                                @endif
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                            <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>@if(isset($terminal_managements->cpu->name)){{$terminal_managements->cpu->name}}@endif</span>
                                @else
                                    {{ Form::select('cpu', $cpus, $terminal_managements->cpu_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                                @endif
                            </div>
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                            <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>@if(isset($terminal_managements->memory->name)){{$terminal_managements->memory->name}}@endif</span>
                                @else
                                    {{ Form::select('memory', $memories, $terminal_managements->memories_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                            <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>@if(isset($terminal_managements->hdd->name)){{$terminal_managements->hdd->name}}@endif</span>
                                @else
                                    {{ Form::select('hdd', $hdds, $terminal_managements->hdd_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                                @endif
                          </div>
                        <label class="col-lg-2 control-label"><i class="fab fa-apple"></i>OS</label>
                            <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>@if(isset($terminal_managements->os->name)){{$terminal_managements->os->name}}@endif</span>
                                @else
                                    {{ Form::select('os', $oss, $terminal_managements->os_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-windows"></i>Office</label>
                            <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>@if(isset($terminal_managements->office_information->name)){{$terminal_managements->office_information->name}}@endif</span>
                                @else
                                    {{ Form::select('office_information', $office_informations, $terminal_managements->office_informations_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                                @endif
                            </div>
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                            <div class="col-md-4">
                                @if (Auth::guest())
                                    <span>@if(isset($terminal_managements->memo)){{$terminal_managements->memo}}@endif</span>
                                @else
                                    {{Form::text('memo',$terminal_managements->memo,['class' => 'form-control', 'placeholder' => '入力してください'])}}
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                            <div class="input-group col-md-4">
                                {{Form::text('qr_code',$terminal_managements->qr_code,['id'=>'CopyTarget','class' => 'border border-info rounded text-secondary form-control','readonly'])}}
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info col" onclick="CopyToClipboard()" data-toggle="tooltip" data-placement="top" title="コピーする">
                                        <i class="fas fa-clipboard"></i>
                                    </button>
                                </span>
                            </div>
                    </div>

                    @if (Auth::guest())
                    @else
                        <div class="row text-center">
                            <button type="submit" class="btn btn-round btn-success">編集</button>
                            <button id="delete" type="button" class="btn btn-round btn-danger">削除</button>
                        </div>
                    @endif

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
        function CopyToClipboard() {
            // コピー対象をJavaScript上で変数として定義する
            var copyTarget = document.getElementById("CopyTarget");
            // コピー対象のテキストを選択する
            copyTarget.select();
            // 選択しているテキストをクリップボードにコピーする
            document.execCommand("Copy");
            // コピーをお知らせする
            swal("コピーできました!",copyTarget.value);
        }
    </script>

    <script>
    $('#delete').click((event) => {
        swal({
            title: 'この情報を削除しますか?',
            text: "消すともとに戻すことができません",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $('#form1').submit();
          }
        });
    })
    </script>
@endsection
