@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>端末新規登録</h4>
            <form class="form-horizontal style-form" method="get">

                {{--
                <form method="POST" action="{{ route('employees.create') }}"> --}} {{--
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
                        <label class="col-lg-2 col-sm-2 control-label">ホスト名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">稟議No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">氏名</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">部門</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">保管場所</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">メーカー名</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">製品名</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">シリアルナンバー</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">CPU/クロック</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">メモリ</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">HDD</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">OS</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Office</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">メモ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">QRコードURL</label>
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
