@extends('layouts.app')

@section('content')
<section id="content">
 <section class="wrapper">
                     


<div class="row mt">
  <div class="col-lg-12 col-xs-12">
    <div class="form-panel">
      <h4 class="mb" style="font-size:2.5em;padding-top: 10px;">利用状況登録画面</h4>
        <hr>
          <form class="form-horizontal style-form" method="get">
            <div class="form-group">
              <label class="col-md-4 control-label" style="font-size:1.6em;text-align:left;letter-spacing:1.3px;">社員名</label>
                <div class="col-md-8">
                  <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" style="font-size:1.6em;text-align:left;letter-spacing:1.3px;">部署</label>
                <div class="col-md-8">
                  <select class="form-control" name="department">
                    <option></option>
                    @foreach($departments as $department)
                      <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                  </select>
                </div>
             </div>
             <div class="form-group">
               <label class="col-md-4 control-label" style="font-size:1.6em;text-align:left;letter-spacing:1.3px;">保管場所</label>
                 <div class="col-md-8">
                 <select class="form-control" name="depository">
                 <option></option>
                    @foreach($depositories as $depository)
                      <option value="{{$depository->id}}">{{$depository->depository}}</option>
                    @endforeach
                  </select>
                 </div>
             </div>
             <div class="form-group">
               <div class="radio">
                 <div class="row">
                   <div class="col-md-4">
                     <p  style="padding-left:16px;font-size:1.6em;text-align:left;letter-spacing:1.3px;">利用状況</p>
                    </div>
                    <div class="col-md-8">
                      <label class="label_left" style="padding-left:35px;">
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        使用中
                      </label>
                      <label style="padding-left: 85px;">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        未使用
                      </label>
                      <p class="text-danger" style="padding-top:20px;padding-left:12px;font-size:1.3em;">返却する場合は未使用を選択して、登録してください。</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12" style="text-align:center;">                
                <button type="submit" class="btn btn-primary btn-round">登録</button>
                </div>
              </div>
            </div>  
    </section>
</section>

@endsection







