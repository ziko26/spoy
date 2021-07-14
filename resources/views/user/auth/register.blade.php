@extends('layouts.user.login')
@section('title','سجل الآن ')
@section('content')
<section class="flexbox-container register">
<div class="col-12 d-flex align-items-center justify-content-center">
            @include('user.includes.alerts.success')
            @include('user.includes.alerts.errors')
    <div class="col-md-7 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0">
            <div class="card-content">
            <div class="card-body">
           
            <form action="{{route('user.register')}}" method="post" class="steps-validation wizard-notification wizard clearfix">
            @method('POST')
              @csrf
                      <!-- Step 1 -->
                      <h6>الخطوة الأولى</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="email">البريد الإلكتروني</label>
                              <input type="email" class="form-control required" id="email" value="{{ old('email') }}" name="email">
                              @error('email')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="password">كلمة المرور</label>
                              <input type="password" class="form-control required" id="password" value="{{ old('password') }}" name="password">
                              @error('password')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 2 -->
                      <h6>الخطوة الثانية</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="fullName">
                              الإسم الكامل
                              </label>
                              <input type="text" class="form-control required" id="fullName" value="{{ old('fullName') }}" name="fullName">
                              @error('fullName')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                            <div class="form-group">
                              <label for="number">
                              رقم الهاتف
                              </label>
                              <input type="tel" class="form-control required" id="number" value="{{ old('phone') }}" name="phone">
                              @error('phone')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                            <div class="form-group">
                              <label for="city">إختر المدينة</label>
                              <select class="c-select form-control required" id="city" name="city_id">
                                @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                              </select>
                              @error('city_id')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="company_name">
                              إسم الشركة (إختياري)
                              </label>
                              <input type="text" class="form-control " id="company_name" value="{{ old('company_name') }}" name="company_name">
                            </div>
                            <div class="form-group">
                              <label for="address">
                              العنوان (إختياري) 
                              </label>
                              <input type="text" class="form-control " id="address" value="{{ old('address') }}" name="address">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="reg">
                               لديك حساب؟ <a href="{{route('show.user.login')}}"> سجل الدخول</a>
                                </div>
                    </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection