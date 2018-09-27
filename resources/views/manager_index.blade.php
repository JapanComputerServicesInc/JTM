@extends('layouts.app')

@section('content')


<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">検索</h1>
            <hr>
            {!! Form::open(['route' => ['terminal_search'], 'method' => 'post', 'class' => 'form-horizontal style-form']) !!}

                <div class="form-group">
                    <label class="col-sm-5 col-md-5 col-lg-1 control-label">氏名</label>
                    <div class="col-lg-3">
                        {{Form::text('employee',null,['class' => 'form-control'])}}
                    </div>
                    <label class="col-md-1 control-label">保管場所</label>
                    <div class="col-lg-3">
                        {{ Form::select('depository', $depositories, '', ['placeholder' => '選択してください', 'class' => 'form-control selectpicker']) }}
                    </div>
                    <label class="col-md-1 control-label">OS</label>
                    <div class="col-lg-3">
                        {{ Form::select('os', $oss, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker']) }}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">Office</label>
                    <div class="col-lg-3">
                        {{ Form::select('office_information', $office_informations, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker']) }}
                    </div>
                    {{-- <label class="col-md-1 col-xs-12 control-label">CPU</label>
                    <div class="col-lg-3">
                        {{ Form::select('cpu', $cpus, null, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                    </div> --}}
                    <label class="col-md-1 col-xs-12 control-label">メモリ</label>
                    <div class="col-lg-3">
                        {{ Form::select('memory', $memories, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker']) }}
                    </div>
                {{-- </div> --}}

                {{-- <div class="form-group"> --}}
                    <label class="col-md-1 col-xs-12 control-label">HDD/SSD</label>
                    <div class="col-lg-3">
                        {{ Form::select('hdd', $hdds, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker']) }}
                    </div>
                </div>
                <div class="form-group">
                  <label class="checkbox-inline">
                      {{ Form::radio('optionsRadios', '1') }}
                    使用中
                  </label>
                  <label class="checkbox-inline">
                      {{ Form::radio('optionsRadios', '2') }}
                    未使用
                  </label>
                  <label class="checkbox-inline">
                      {{ Form::radio('optionsRadios', '', true) }}
                    全て
                  </label>
                </div>

                <div class="row">
                  <div class="col-sm-12 pull-right text-right">
                      {{Form::submit('検索',['class' =>'btn btn-info btn-round'])}}
                      {{Form::button('クリア',['class' =>'btn btn-default btn-round', 'id'=>'clearForm'])}}
                  </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <a class="btn btn-success btn-round pull-right" href="{{route('terminal_new')}}">新規登録</a>

            <table class="table table-striped table-advance table-hover">
                <h1 class="mb"> 端末情報一覧</h1>
                <hr>
                <thead>
                    <tr>
                        <th> id</th>
                        <th class="col-sm-1"><i class="fa fa-check-square"></i> 利用状況</th>
                        <th class="col-sm-1"><i class="fa fa-laptop"></i> ホスト名</th>
                        <th class="col-sm-1"><i class="fa fa-user"></i> 氏名</th>
                        <th class="col-sm-2"><i class="fa fa-archive"></i> 保管場所</th>
                        <th class="col-sm-2"><i class="fab fa-apple"></i> OS</th>
                        <th class="col-sm-2"><i class="fab fa-windows"></i> Office</th>
                        <!-- <th><i class="fa fa-brain"></i> CPU</th> -->
                        <th class="col-sm-1"><i class="fa fa-save"></i> メモリ</th>
                        <th class="col-sm-2"><i class="fa fa-edit"></i> HDD/SSD</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($terminal_managements as $terminal_management)
                        <tr>
                            <td ><a href="{{'#'}}">{{$terminal_management->id}}</td>
                            <td><span class="@if($terminal_management->status->id ==1)label label-success label-mini @else label label-danger label-mini @endif">{{$terminal_management->status->name}}</span></td>
                            <td>{{$terminal_management->pc_name}}</td>
                            @if (isset($terminal_management->employee->name )) <td>{{$terminal_management->employee->name}} </td> @else <td></td> @endif
                            <td>{{$terminal_management->depository->name}}</td>
                            @if (isset($terminal_management->os->name )) <td>{{$terminal_management->os->name}}</td> @else <td></td> @endif
                            @if (isset($terminal_management->office_info->name )) <td>{{$terminal_management->office_info->name}}</td> @else <td></td> @endif
                            @if (isset($terminal_management->memory->name )) <td>{{$terminal_management->memory->name}}</td> @else <td></td> @endif
                            @if (isset($terminal_management->hdd->name )) <td>{{$terminal_management->hdd->name}}</td> @else <td></td> @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="text-center">
            {{ $terminal_managements->links() }}
            </div>
        </div>
    </div>
</div>


<!-- /content-panel -->
@endsection

@section('scripts')
    <script>
        $(function(){
            // 入力値をリセット
            $('#clearForm').bind('click', function(){
                console.log('クリア', this.form);
                $(this.form).find("textarea, :text select").val("");
                $(this.form).find(".selectpicker").selectpicker('val', '');
                // $(this.form).find(":checkbox:checked").prop("checked", false);
                $(this.form).find(":radio[value='']").prop("checked", true);
           });
        });
    </script>
@endsection
