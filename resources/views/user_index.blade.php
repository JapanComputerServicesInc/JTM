@extends('layouts.app')

@section('content')
<section class="wrapper">
  <h3>JCS　Terminal　Management　</h3>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"style="padding-top:15px;padding-left:15px;">新規社員登録</div>
            <hr>
              <div class="card-body">
                @csrf
                  <div class="form-group">
                    <div class="col-md-3">
                      <label for="employee_no">社員氏名</label>
                    </div>
                    <div class="col-md-9">
                      <input type="text" class="form-control">
                      <span class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"style="padding-top:20px;">
                      <label for="employee_no">部署</label>
                    </div>
                    <div class="col-md-9"style="padding-top:20px;">
                      <input type="text" class="form-control">
                      <span class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3"style="padding-top:20px;">
                      <label for="employee_no">保管場所</label>
                    </div>
                    <div class="col-md-9"style="padding-top:20px;">
                      <input type="text" class="form-control">
                      <span class="text-danger"></span>
                    </div>
                  </div>
              </div>  
          </div>
        </div>
      </div>
    </div>
</section>
@endsection







