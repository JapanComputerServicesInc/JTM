@extends('layouts.app')

@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <a class="btn btn-success btn-round pull-right" href="{{route('department_new')}}">新規登録</a>

                <table class="table table-striped table-advance table-hover">
                    <h1 class="mb"> 部署一覧</h1>
                    <hr>
                    <thead>
                        <tr>
                            <th> id</th>
                            <th><i class="fa fa-user"></i> 部署</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td >{{link_to_route('department_edit', $department->id , $department->id)}}</td>
                                <td>{{$department->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {{ $departments->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
