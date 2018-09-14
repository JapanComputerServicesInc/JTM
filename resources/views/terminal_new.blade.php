@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末新規登録</h4>
            {{-- <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_create') }}"> --}}
                    {{-- @csrf --}}

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
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
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>稟議No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-user"></i>氏名</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="employee_name">
                              @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-building"></i>部門</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>保管場所</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="depository">
                            @foreach($depositories as $depository)
                              <option value="{{$depository->id}}">{{$depository->depository}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-gavel"></i>メーカー名</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="producer">
                            @foreach($terminal_info as $t_f)
                              <option value="{{$t_f->id}}">{{$t_f->producer}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="product_name">
                            @foreach($terminal_info as $t_f)
                              <option value="{{$t_f->id}}">{{$t_f->name}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-list-ol"></i>シリアルナンバー</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-brain"></i>CPU</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-save"></i>メモリ</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="memory">
                            @foreach($memories as $memory)
                              <option value="{{$memory->id}}">{{$memory->memory}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="hdd">
                            @foreach($hdd as $h)
                              <option value="{{$h->id}}">{{$h->hdd}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="os">
                            @foreach($os as $o)
                              <option value="{{$o->id}}">{{$o->os}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="office_info">
                            @foreach($office_info as $oi)
                              <option value="{{$oi->id}}">{{$oi->name}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-edit"></i>メモ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label"><i class="fa fa-envelope"></i>QRコードURL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
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
