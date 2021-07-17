@extends('layouts.admin.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
        @include('admin.includes.alerts.success')
        @include('admin.includes.alerts.errors')
            <div class="card-body card-dashboard"> 
                @if(count($pages) >= 1)          
                     <table
                    class="table table-striped table-bordered text-center">
                    <thead>
                    <tr>
                        <th>Page Name</th>
                        <th>Page Slug</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($pages as $page)
                      <tr>                       
                          <td>{{$page->page_name}}</td>
                          <td>{{$page->slug}}</td>
                          <td>{{\Carbon\Carbon::parse($page->created_at)->format('d/m/Y')}}</td>
                          <td class="d-flex justify-content-center align-items-center">
                            <a class="text-success mr-2" href="{{route('admin.pages.edit', $page->id)}}">
                                    <i class="ft-edit"></i>
                              </a>
                              <!-- Button trigger modal -->
                            <a class="text-danger" type="button" data-toggle="modal" data-target="#exampleModal{{$page->id}}">
                                <i class="ft-trash"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$page->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete {{$page->page_name}} ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{route('admin.pages.delete', $page->id)}}" type="button" class="btn btn-danger"> Delete</a>
                                </div>
                                </div>
                            </div>
                            </div>
                          </td>
                      </tr>   
                      @endforeach 
                    </tbody>
                </table>
                @else
                <a href="{{route('admin.pages.create')}}">+ Add new page</a>
                @endif
             </div>
            </div>
            </div>
            </div>
        </div>
    </div>

@endsection