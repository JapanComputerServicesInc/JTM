
@extends('layouts.app')

@section('content')

<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h1 class="mb">利用状況登録画面</h1>
        <hr>
        {!! Form::open(['route' => ['user_register_update',$terminal_management->pc_name], 'method' => 'post', 'class' => 'form-horizontal style-form']) !!}
        @csrf
        @method('put')
        <div class="form-group">
            <label class="col-sm-2 control-label"><i class="fa fa-check-square"></i>利用状況</label>
                <div class="radio">
                    @if($terminal_management->status_id==1)
                        <label>{{ Form::radio('status', '1',true) }}使用中</label>
                        <label>{{ Form::radio('status', '2') }}未使用</label>
                    @else
                        <label>{{ Form::radio('status', '1') }}使用中</label>
                        <label>{{ Form::radio('status', '2',true) }}未使用</label>
                    @endif
                </div>
            <label class="text-danger control-label"> ※返却する場合は未使用を選択して、登録してください。</label>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-md-4 col-lg-2 control-label"><i class="fa fa-user"></i>氏名</label>
              <div class="col-lg-5">
              @if ($errors->has('employee'))
                  <div class="has-error">
                      {{ Form::select('employee', $employees,  $terminal_management->employees_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
                      <span class="text-danger">{{$errors->first('employee')}}</span>
                  </div>
              @else
                  {{ Form::select('employee', $employees,  $terminal_management->employees_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker','data-live-search' => "true"]) }}
              @endif
            </div>
      </div>

      <div class="form-group">
            <label class="col-sm-2 col-md-4 col-lg-2 control-label"><i class="fa fa-save"></i>保管場所</label>
              <div class="col-lg-5">
                  @if ($errors->has('depository'))
                      <div class="has-error">
                          {{ Form::select('depository', $depositories, $terminal_management->depositories_id, ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                          <span class="text-danger">
                              {{$errors->first('depository')}}</span>
                      </div>
                @else
                    {{ Form::select('depository', $depositories, $terminal_management->depositories_id, ['placeholder' => '必須項目です', 'class' => 'form-control selectpicker', 'data-live-search' => 'true']) }}
                @endif
            </div>
      </div>
                <div class="row">
                    <div class="col-sm-12 pull-right text-right">
                        {{Form::submit('登録',['class' =>'btn btn-success btn-round'])}}
                        {{Form::button('クリア',['class' =>'btn btn-default btn-round', 'id'=>'clearForm'])}}
                    </div>
                </div>
           {!! Form::close() !!}
       </div>
   </div>
</div>
<!-- /content-panel -->
@endsection

@section('scripts3')
    <script>
        $(function(){
            // 入力値をリセット
            $('#clearForm').bind('click', function(event) {
                $(this.form).find("textarea, :text select").val("");
                $(this.form).find(".selectpicker").selectpicker('val', '');
                $(this.form).find("input[name='status']:eq(1)").prop("checked", true);
            });

       });
    </script>
@endsection
