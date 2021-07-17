@extends('layouts.admin.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card"> 
            <div class="card-body card-dashboard">
            <form method="post" action="{{route('admin.pages.update', $page->id)}}">
            @csrf
                      <div class="form-body">
                      @include('admin.includes.alerts.success')
                      @include('admin.includes.alerts.errors')
                        <h4 class="form-section"><i class="ft-tag"></i> Edit {{$page->page_name}} page</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="page_name">Page Name</label>
                              <input type="text" id="page_name" value="{{ $page->page_name }}" class="form-control" placeholder="Name" name="page_name">
                              @error('page_name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="page_slug">Page Slug</label>
                              <input type="text" id="page_slug" class="form-control" placeholder="Slug" value="{{ $page->slug }}" name="slug">
                              @error('slug')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group mt-5">
                            <label class="mb-2">Page Content</label>
                            <input type="hidden" name="page_content" id="quill_html">
                            <div style="height:350px" id="editor">
                            {!! $page->page_content !!}
                            </div>
                              @error('page_content')
                                <span class="text-danger">{{$message}}</span>
                              @enderror 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                        <button id="submit" type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div

@endsection