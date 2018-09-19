@extends('layouts.app')

@section('content')


<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">検索</h4>
            <hr>
            {!! Form::open(['route' => ['terminal_search'], 'method' => 'post', 'class' => 'form-horizontal style-form']) !!}
                <div class="form-group">
                    <label class="col-sm-5 col-md-5 col-lg-1 control-label">氏名</label>
                    <div class="col-lg-3">
                        <input type="text" name="employee" class="form-control">
                    </div>
                    <label class="col-md-1 control-label">保管場所</label>
                    <div class="col-lg-3">
                        {{ Form::select('depository', $depositories, null, ['placeholder' => '選択してください。', 'class' => 'form-control']) }}
                    </div>
                    <label class="col-md-1 control-label">OS</label>
                    <div class="col-lg-3">
                        <select name="os" class="form-control">
                            <option></option>
                            @foreach ($oss as $os)
                                <option value="{{$os ->id}}">{{$os ->os}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">Office</label>
                    <div class="col-lg-3">
                        <select name="office_information" class="form-control">
                            <option></option>
                            @foreach ($office_informations as $office_information)
                                <option value="{{$office_information ->id}}">{{$office_information ->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-md-1 col-xs-12 control-label">CPU</label>
                    <div class="col-lg-3">
                        <select name="cpu" class="form-control">
                            <option></option>
                            @foreach ($cpus as $cpu)
                                <option value="{{$cpu ->id}}">{{$cpu ->cpu}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-md-1 col-xs-12 control-label">メモリ</label>
                    <div class="col-lg-3">
                        <select name="memory" class="form-control">
                            <option></option>
                            @foreach ($memories as $memory)
                                <option value="{{$memory ->id}}">{{$memory ->memory}}</option>
                            @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">HDD/SSD</label>
                    <div class="col-lg-3">
                        <select name="hdd" class="form-control">
                            <option></option>
                            @foreach ($hdds as $hdd)
                                <option value="{{$hdd ->id}}">{{$hdd ->hdd}}</option>
                            @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="checkbox-inline">
                      {{ Form::radio('category_id', '1') }}
                    <input type="radio" name="optionsRadios" id="optionsRadios" value="1">
                    使用中
                  </label>
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios" value="2">
                    未使用
                  </label>
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios" value="">
                    全て
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-12 pull-right text-right">
                    <button type="submit" class="btn btn-info btn-round">検索</button>
                    <button type="button" class="btn btn-default btn-round">クリア</button>
                  </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <a class="btn btn-success btn-round pull-right" href="{{'#'}}">新規登録</a>

            <table class="table table-striped table-advance table-hover">
                <h4> 端末情報一覧</h4>
                <hr>
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> id</th>
                        <th><i class="fa fa-check-square"></i> 利用状況</th>
                        <th class="hidden-phone"><i class="fa fa-laptop"></i> ホスト名</th>
                        <th><i class="fa fa-user"></i> 氏名</th>
                        <th><i class="fa fa-archive"></i> 保管場所</th>
                        <th><i class="fab fa-apple"></i> OS</th>
                        <th><i class="fab fa-windows"></i> Office</th>
                        <th><i class="fa fa-brain"></i> CPU</th>
                        <th><i class="fa fa-save"></i> メモリ</th>
                        <th><i class="fa fa-edit"></i> HDD/SSD</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($terminal_managements as $terminal_management)
                        <tr>
                            <td><a href="#">{{$terminal_management->id}}</a></td>
                            <td><span class="@if($terminal_management->status->id ==1)label label-success label-mini @else label label-danger label-mini @endif">{{$terminal_management->status->status}}</span></td>
                            <td>{{$terminal_management->pc_name}}</td>
                            <td>{{$terminal_management->employee->name}}</td>
                            <td>{{$terminal_management->depository->depository}}</td>
                            <td>{{$terminal_management->os->os}}</td>
                            <td>{{$terminal_management->office_info->name}}</td>
                            <td>{{$terminal_management->cpu->cpu}}</td>
                            <td>{{$terminal_management->memory->memory}}</td>
                            <td>{{$terminal_management->hdd->hdd}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- /content-panel -->
@endsection
