@extends('layouts.app')

@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <a class="btn btn-success btn-round pull-right" href="{{route('cpu_new')}}">新規登録</a>

                <table class="table table-striped table-advance table-hover">
                    <h1 class="mb"> CPU一覧</h1>
                    <hr>
                    <thead>
                        <tr>
                            <th> id</th>
                            <th><i class="fa fa-brain"></i> CPU</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cpus as $cpu)
                            <tr>
                                <td >{{link_to_route('cpu_edit', $cpu->id , $cpu->id)}}</td>
                                <td>{{$cpu->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {{ $cpus->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
