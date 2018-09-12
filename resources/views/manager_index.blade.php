@extends('layouts.app')

@section('content') {{--
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <label class="control-label">氏名</label>
        </div>
        <div class="col-md-4 col-xs-12">
            <label class="control-label">氏名</label>
        </div>
        <div class="col-md-4 col-xs-12">
            <label class="control-label">氏名</label>
        </div>
        <div class="col-md-6 col-xs-12">
            <label class="control-label">氏名</label>
        </div>
        <div class="col-md-6 col-xs-12">
            <label class="control-label">氏名</label>
        </div>
    </div>
</div> --}}


<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">検索</h4>
            <hr>
            <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                    <label class="col-sm-5 col-md-5 col-lg-1 control-label">氏名</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control">
                    </div>
                    <label class="col-md-1 control-label">保管場所</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <label class="col-md-1 control-label">OS</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">CPU</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label class="col-md-1 col-xs-12 control-label">Office</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label class="col-md-1 col-xs-12 control-label">メモリ</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">HDD/SSD</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                    使用中
                  </label>
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    未使用
                  </label>
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">
                    全て
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-12 pull-right text-right">
                    <button type="button" class="btn btn-default">クリア</button>
                    <button type="submit" class="btn btn-info">検索</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <a class="btn btn-success btn btn-success pull-right" href="#">新規登録</a>

            <table class="table table-striped table-advance table-hover">
                <h4> 端末情報一覧</h4>
                <hr>
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> id</th>
                        <th><i class="fa fa-check-square"></i> 利用状況</th>
                        <th class="hidden-phone"><i class="fa fa-laptop"></i> ホスト名</th>
                        <th><i class="fa fa-user"></i> 氏名</th>
                        <th><i class=" fa fa-archive"></i> 保管場所</th>
                        <th><i class=" fab fa-apple"></i> OS</th>
                        <th><i class=" fab fa-windows"></i> Office</th>
                        <th><i class=" fa fa-brain"></i> CPU</th>
                        <th><i class=" fa fa-save"></i> メモリ</th>
                        <th><i class=" fa fa-edit"></i> HDD/SSD</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">1</a></td>
                        <td><span class="label label-success label-mini">使用中</span></td>
                        <td class="hidden-phone"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="#">2</a></td>
                        <td><span class="label label-danger label-mini">未使用</span></td>
                        <td class="hidden-phone"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- /content-panel -->
@endsection
