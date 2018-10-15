@extends('layouts.app')

@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <a class="btn btn-success btn-round pull-right" href="{{route('employee_new')}}">新規登録</a>

                <table class="table table-striped table-advance table-hover">
                    <h1 class="mb"> 社員名簿</h1>
                    <hr>
                    <thead>
                        <tr>
                            <th class="col-md-4"> id</th>
                            <th class="col-md-4"><i class="fa fa-user"></i> 社員</th>
                            <th class="col-md-4"> 部署</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td >{{link_to_route('employee_edit', $employee->id , $employee->id)}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->department->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
