@extends('layouts.app')

@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <a class="btn btn-success btn-round pull-right" href="{{route('office_new')}}">新規登録</a>

                <table class="table table-striped table-advance table-hover">
                    <h1 class="mb"> Office情報一覧</h1>
                    <hr>
                    <thead>
                        <tr>
                            <th class="col-md-2"> id</th>
                            <th class="col-md-5"><i class="fab fa-windows"> Office</th>
                            <th class="col-md-5"> ライセンス</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($office_informations as $office_information)
                            <tr>
                                <td>{{link_to_route('office_edit', $office_information->id , $office_information->id)}}</td>
                                <td>{{$office_information->name}}</td>
                                <td>{{$office_information->office_license->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                {{ $office_informations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
