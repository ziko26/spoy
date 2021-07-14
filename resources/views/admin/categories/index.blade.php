@extends('layouts.admin.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
        @include('admin.includes.alerts.success')
        @include('admin.includes.alerts.errors')
            <div class="card-body card-dashboard"> 
                @if(count($categories) >= 1)          
                     <table
                    class="table table-striped table-bordered text-center">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Creation Date</th>
                        <th>Statu</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                      <tr>                       
                          <td>
                            @if(isset($category->image))
                            <img width="50" height="50" src="{{asset('public/images/admin/categories/'.$category->image)}}" alt="{{$category->name}}">
                            @else
                            <img width="50" height="50" src="{{asset('public/images/default.jpg')}}" alt="{{$category->name}}">
                            @endif
                          </td>
                          <td>{{$category->name}}</td>
                          <td>{{\Carbon\Carbon::parse($category->created_at)->format('d/m/Y')}}</td>
                          <td>{!!$category->getActive()!!}</td>
                          <td class="d-flex justify-content-center align-items-center">
                            <a class="text-success mr-2" href="{{route('admin.categories.edit', $category->id)}}">
                                    <i class="ft-edit"></i>
                              </a>
                              <!-- Button trigger modal -->
                            <a class="text-danger" type="button" data-toggle="modal" data-target="#exampleModal{{$category->id}}">
                                <i class="ft-trash"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete {{$category->name}} ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{route('admin.categories.delete', $category->id)}}" type="button" class="btn btn-danger"> Delete</a>
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
                <a href="{{route('admin.categories.create')}}">+ Add new category</a>
                @endif
             </div>
            </div>
            </div>
            </div>
        </div>
    </div>

@endsection