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
                            <input type="text" class="form-control" name="pc_name" value="{{$terminal_managements->pc_name}}" required>
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
                          <select class="form-control" name="employee">
                          @foreach ($employees as $employee)
                <option value="{{$employee -> id}}" @if($employee -> id ) selected @endif> {{$employee->name}}</option>
                @endforeach

                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-building"></i>部門</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="department">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="depository" required>
                     @foreach ($depositories as $depository)
                     <option value="{{$depository -> id}}" @if($depository -> id ) selected @endif> {{$depository->name}}</option>
                    @endforeach      
                    </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-gavel"></i>メーカー名</label>
                        <div class="col-sm-10">
                        
                          <select class="form-control" name="depository" required>
                          @foreach ($terminal_info as $TerminalInformation)
                     <option value="{{$TerminalInformation -> id}}" @if($TerminalInformation -> id ) selected @endif> {{$TerminalInformation->producer}}</option>
                    @endforeach   
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="product">
                          @foreach ($terminal_info as $TerminalInformation)
                     <option value="{{$TerminalInformation -> id}}" @if($TerminalInformation -> id ) selected @endif> {{$TerminalInformation->name}}</option>
                    @endforeach  
                          </select>
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
                            <input type="text" class="form-control" name="cpu">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="memory">
                          @foreach ($memories as $memory)
                     <option value="{{$memory -> id}}" @if($memory -> id ) selected @endif> {{$memory->name}}</option>
                    @endforeach 
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="hdd">
                          @foreach ($hdds as $hdd)
                     <option value="{{$hdd -> id}}" @if($hdd -> id ) selected @endif> {{$hdd->name}}</option>
                    @endforeach 
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="os">
                          @foreach ($os as $os)
                     <option value="{{$os -> id}}" @if($os -> id ) selected @endif> {{$os->name}}</option>
                    @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="OfficeInformation">
                          @foreach ($office_info as $OfficeInformation)
                     <option value="{{$OfficeInformation -> id}}" @if($OfficeInformation -> id ) selected @endif> {{$OfficeInformation->name}}</option>
                    @endforeach
                          </select>
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
                      <button type="submit" class="btn btn-round btn-success" onClick="alert('エラーです！');">確認画面へ</button>
                      <button type="button" class="btn btn-round btn-danger">削除</button>
                    </div>
                </form>
        </div>
    </div>
   
</div>





@endsection

