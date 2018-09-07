@extends('layouts.app')

@section('content')
<div class="content-panel">
    <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i> 端末情報一覧</h4>
        <hr>
        <thead>
            <tr>
                <th><i class="fa fa-bullhorn"></i> id</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i> ホスト名</th>
                <th><i class="fa fa-bookmark"></i> 氏名</th>
                <th><i class=" fa fa-edit"></i> 保管場所</th>
                <th><i class=" fa fa-edit"></i> OS</th>
                <th><i class=" fa fa-edit"></i> Office</th>
                <th><i class=" fa fa-edit"></i> CPU</th>
                <th><i class=" fa fa-edit"></i> メモリ</th>
                <th><i class=" fa fa-edit"></i> HDD</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="basic_table.html#">Company Ltd</a></td>
                <td class="hidden-phone">Lorem Ipsum dolor</td>
                <td>12000.00$ </td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="basic_table.html#">
                                    Dashgum co
                                </a>
                </td>
                <td class="hidden-phone">Lorem Ipsum dolor</td>
                <td>17900.00$ </td>
                <td><span class="label label-warning label-mini">Due</span></td>
                <td>
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- /content-panel -->
@endsection
