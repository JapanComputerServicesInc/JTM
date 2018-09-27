@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末編集・削除</h4>
            <form class="form-horizontal style-form" method="get">

                {{--
                <form method="POST" action="{{ route('telminal_update',['id' => $terminal_managements->id') }}"> --}} {{--
                    @csrf --}}
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">利用状況</label>
                     <div class="radio">
                       <label>
         						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>使用中
         						  </label>

                       <label>
         						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">未使用
         						  </label>
                    </div>
                   </div>



                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-laptop"></i>ホスト名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{$terminal_managements->pc_name}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="approval_no">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-user"></i>氏名</label>
                        <div class="col-sm-10">
                            {{ Form::select('employee', $employees,  $terminal_managements->employees_id, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-building"></i>部門</label>
                        <div class="col-sm-10">
                        {{ Form::select('department', $departments, $terminal_managements-> employee-> departments_id, ['placeholder' => '選択してください', 'class' => 'form-control']) }}   
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-sm-10">
                        {{ Form::select('depository', $depositories, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-gavel"></i>メーカー名</label>
                        <div class="col-sm-10">
                        {{ Form::select('TerminalInformation', $terminal_info, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-sm-10">
                        {{ Form::select('TerminalInformatiom', $terminal_info, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                      </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="serial_no">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                        <div class="col-sm-10">
                        {{ Form::select('cpu', $cpus, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}  
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                        <div class="col-sm-10">
                          {{ Form::select('memory', $memories, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}  
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-sm-10">
                          {{ Form::select('hdd', $hdds, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}      
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-sm-10">                         
                          {{ Form::select('os', $oss, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}      
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-sm-10">                          
                          {{ Form::select('office_information', $office_informations, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}            
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="memo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="qr_code" required>
                        </div>
                    </div>

                    <div class="row text-center">
                      <button type="submit" class="btn btn-round btn-success">確認画面へ</button>
                      <button type="button" class="btn btn-round btn-danger">削除</button>
                    </div>
                </form>
        </div>
    </div>

</div>





@endsection
