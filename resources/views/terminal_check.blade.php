@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末新規登録確認</h4>
            <form class="form-horizontal style-form" method="get">

                {{--
                <form method="POST" action="{{ route('employees.create') }}"> --}} {{--
                    @csrf --}}
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">利用状況<i class="fa fa-check-square"></i></label>
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
                        <label class="col-lg-2 col-sm-2 control-label">ホスト名<i class="fa fa-laptop"></i></label>
                          <p></p>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">稟議No<i class="fa fa-list-ol"></i></label>
                          <p></p>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">氏名<i class="fa fa-user"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">部門<i class="fa fa-building"></i></label>
                          <p></p>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">保管場所<i class="fa fa-save"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">メーカー名<i class="fa fa-gavel"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">製品名<i class="fa fa-desktop"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">シリアルナンバー<i class="fa fa-list-ol"></i></label>
                          <p></p>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">CPU<i class="fa fa-heart"></i></label>
                          <p></p>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">メモリ<i class="fa fa-save"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">HDD<i class="fa fa-edit"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">OS<i class="fa fa-apple"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Office<i class="fa fa-windows"></i></label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">メモ<i class="fa fa-edit"></i></label>
                          <p></p>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">QRコードURL<i class="fa fa-envelope"></i></label>
                        <p></p>
                    </div>

                  <button type="submit" class="left-block btn btn-round btn-success">登録画面へ戻る</button>
                  <button type="submit" class="btn btn-round btn-primary" style="float:right">登録</button>
                </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>
<!-- /row -->




@endsection
