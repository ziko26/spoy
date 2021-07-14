@extends('layouts.user.user')
@section('title', 'All Orders')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            @if(count($orders) >= 1)
                <table
                    class="table table-striped display nowrap table-bordered scroll-horizontal dataTable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>price</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                     
                      @foreach($orders as $order)
                      @if(auth()->user()->id == $order->user_id)
                      <tr> 
                          <td>{{$order->item->name}}</td>
                          <td>{{\Carbon\Carbon::parse($order->created_at)->format('d/m/Y')}}</td>
                          <td>{{$order->item->price}}</td>
                          <td>{{$order->customer_name}}</td>
                          <td>{{$order->customer_phone}}</td>
                          <td>{!!$order->getStatut()!!}</td>
                          <td>
                         
                          <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(62px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <form method="post" action="{{route('user.orders.update', $order->id)}}">
                                    @csrf
                                    <input type="hidden" value="1" name="statut">
                                    <button class="send dropdown-item success" type="submit">
                                    <i class="ft-check-circle"></i> Delevraid
                                    </button>
                                </form>    
                                <form method="post" action="{{route('user.orders.update', $order->id)}}">
                                    @csrf
                                    <input type="hidden" value="2" name="statut">
                                    <button class="send dropdown-item danger" type="submit">
                                    <i class="ft-x-circle"></i> Canceled
                                    </button>
                                </form>
                                </span>
                          </span>
                          </td>
                      </tr>   
                      @endif
                      @endforeach    
                     
                    </tbody>
                </table>
                @else
               <p class="text-center">No Order</p>                                   
                @endif
            </div>
            </div>
        </div>
    </div>
</div

@endsection