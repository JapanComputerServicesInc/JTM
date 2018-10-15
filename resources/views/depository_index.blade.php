@extends('layouts.app')

@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <a class="btn btn-success btn-round pull-right" href="{{route('depository_new')}}">新規登録</a>

                <table class="table table-striped table-advance table-hover">
                    <h1 class="mb"> 保管場所一覧</h1>
                    <hr>
                    <thead>
                        <tr>
                            <th> id</th>
                            <th><i class="fa fa-archive"></i> 保管場所</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($depositories as $depository)
                            <tr>
                                <td >{{link_to_route('depository_edit', $depository->id , $depository->id)}}</td>
                                <td>{{$depository->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {{ $depositories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
