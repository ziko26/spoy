@extends('layouts.user.user')
@section('title', 'Create New Order')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            <form class="form">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-box"></i> Create New Order</h4>
                        <div class="form-group">
                          <label for="companyName">Choose landing page</label>
                          <select id="projectinput6" name="landing" class="form-control">
                                <option value="0" selected="" disabled="">Landing page</option>
                                <option value="less than 5000$">less than 5000$</option>
                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                <option value="more than 20000$">more than 20000$</option>
                              </select>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput5">Choose Product</label>
                              @if(count($items) >= 1)
                              <select id="projectinput5" name="product_name" class="form-control">
                                <option value="none" selected disabled>Item</option>
                                @foreach($items as $item)
                                  <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                              </select>
                                @else
                                <div><a href="{{route('user.items.create')}}" class="text-success">create one</a></div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput6">Choose Customer</label>
                              <select id="projectinput6" name="budget" class="form-control">
                                <option value="0" selected="" disabled="">Customer</option>
                                <option value="less than 5000$">less than 5000$</option>
                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                <option value="more than 20000$">more than 20000$</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="projectinput8">Note</label>
                          <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="Add a note to this order"></textarea>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
</div

@endsection