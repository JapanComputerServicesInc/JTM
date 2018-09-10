@extends('layouts.app')

@section('content')

  <div class=" add-task-row">
      <a class="btn btn-success btn btn-success btn-sm pull-right" href="#">新規登録</a>
  </div>


    <div class="content-panel">
    <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i> 端末情報一覧</i></h4>
        <hr>
        <thead>
            <tr>
                <th><i class="fa fa-bullhorn"></i> id</th>
                <th><i class="fa fa-check-square"></i> 利用状況</th>
                <th class="hidden-phone"><i class="fa fa-laptop"></i> ホスト名</th>
                <th><i class="fa fa-user"></i> 氏名</th>
                <th><i class=" fa fa-archive"></i> 保管場所</th>
                <th><i class=" fa fa-apple"></i> OS</th>
                <th><i class=" fa fa-windows"></i> Office</th>
                <th><i class=" fa fa-heart"></i> CPU</th>
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


<!-- /content-panel -->
@endsection
