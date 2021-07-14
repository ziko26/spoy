@extends('layouts.user.user')
@section('title', 'All Items')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
        @include('user.includes.alerts.success')
        @include('user.includes.alerts.errors')
            <div class="card-body card-dashboard">
            @if(count($items) >= 1)
                <table
                    class="table table-striped table-bordered text-center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>price</th>
                        <th>price after descount</th>
                        <th>Orders</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                     
                      @foreach($items as $item)
                      @if(auth()->user()->id == $item->user_id)
                      <tr> 
                          <td>{{$item->name}}</td>
                          <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                          <td>{{$item->price}}</td>
                          <td>
                              @if(empty($item->price_descount))
                              No price
                              @else
                              {{$item->price_descount}}
                              @endif
                            </td>
                          <td>{{$item->orders->count()}}</td>
                          <td class="d-flex justify-content-center align-items-center">
                            <a class="text-success mr-2" href="{{route('user.items.edit',$item->id)}}">
                                    <i class="ft-edit"></i>
                              </a>
                              <!-- Button trigger modal -->
                            <a class="text-danger" type="button" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                <i class="ft-trash"></i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete {{$item->name}} ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{route('user.items.delete',$item->id)}}" type="button" class="btn btn-danger"> Delete</a>
                                </div>
                                </div>
                            </div>
                            </div>
                          </td>
                      </tr>   
                      @endif
                      @endforeach    
                     
                    </tbody>
                </table>
                @else
               <p class="text-center">Create New item <a href="{{route('user.items.create')}}"><i class="ft-plus"></i></a></p>                                   
                @endif
               
            </div>
            </div>
        </div>
    </div>
</div

@endsection