@extends('layouts.app')

@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <a class="btn btn-success btn-round pull-right" href="{{route('terminal_info_new')}}">新規登録</a>

                <table class="table table-striped table-advance table-hover">
                    <h1 class="mb"> 端末情報一覧</h1>
                    <hr>
                    <thead>
                        <tr>
                            <th class="col-md-3"> id</th>
                            <th class="col-md-3"><i class="fa fa-laptop"></i> 製品名</th>
                            <th class="col-md-3"> メーカー</th>
                            <th class="col-md-3"> モデル番号</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($terminal_informations as $terminal_information)
                            <tr>
                                <td >{{link_to_route('terminal_info_edit', $terminal_information->id , $terminal_information->id)}}</td>
                                <td>{{$terminal_information->name}}</td>
                                <td>{{$terminal_information->producer}}</td>
                                <td>{{$terminal_information->model_number}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {{ $terminal_informations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
