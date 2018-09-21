
@extends('layouts.app')

@section('content')



<div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
      <h1 class="mb">利用状況登録画面</h1>
        <hr>
        {!! Form::open(['route' => ['user_register_update',$pc_name], 'method' => 'put', 'class' => 'form-horizontal style-form']) !!}
          <div class="form-group">
            <label class="col-sm-2 col-md-4 col-lg-1 control-label">氏名</label>
              <div class="col-lg-5">
                {{Form::text('employee',null,['class' => 'form-control' ,'data-live-search'=>'true'])}}
              </div>
              <label class="col-md-1 control-label sp_mgn_top_20">部署</label>
                <div class="col-lg-5">
                  {{ Form::select('department', $departments, '', ['placeholder' => '選択してください', 'class' => 'form-control']) }}
                </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-md-4 col-lg-1 control-label">保管場所</label>
              <div class="col-lg-5">
                {{ Form::select('depository', $depositories, '', ['placeholder' => '選択してください', 'class' => 'form-control']) }}
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-md-4 col-lg-1 control-label">使用状況</label>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="checkbox-inline">
                    {{ Form::radio('optionsRadios', '1') }}
                    使用中
                  </label>
                  <label class="checkbox-inline">
                    {{ Form::radio('optionsRadios', '2') }}
                    未使用
                  </label>
                  <p class="text-danger mgn_top_15">※返却する場合は未使用を選択して、登録してください。</p>
                </div>
              </div>
           </div>
           <div class="row">
             <div class="col-sm-12 pull-right text-right">
               {{Form::submit('登録',['class' =>'btn btn-info btn-round'])}}
               {{Form::reset('クリア',['class' =>'btn btn-default btn-round', 'id'=>'clearForm'])}}
             </div>
           </div>
           {!! Form::close() !!}     
        </div>
    </div>
</div>


<!-- /content-panel -->
@endsection
