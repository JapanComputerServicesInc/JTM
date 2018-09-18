@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末編集・削除</h4>
            <form class="form-horizontal style-form" method="get">

                {{--
                <form method="POST" action="{{ route('あっぷでーと') }}"> --}} {{--
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
                            <option>1</option>
                            <option>2</option>
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
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-gavel"></i>メーカー名</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="producer">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-desktop"></i>製品名</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="product_name">
                            <option>1</option>
                            <option>2</option>
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
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fa fa-edit"></i>HDD</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="hdd">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-apple"></i>OS</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="os">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="office">
                            <option>1</option>
                            <option>2</option>
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
                      <button type="submit" class="btn btn-round btn-success">確認画面へ</button>
                      <button type="button" class="btn btn-round btn-danger">削除</button>
                    </div>
                </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->




@endsection
