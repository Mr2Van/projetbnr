@extends('base')

@section('row')


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4 d-inline">Products</h5>      
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">product</th>
              <th scope="col">price in $$</th>
              <th scope="col">expiration date</th>
              <th scope="col">status</th>
              <th scope="col">update</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($articles as $item)
            <tr>
                <th scope="row"> {{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->dateExpirer}}</td>
                <td><button  class="btn btn-success  text-center ">verfied</button></td>
                <td>
                  
                  <form action="/articles/{{ $item->id }}" method="POST">
                    @csrf
                    <button  href="#" class="btn btn-warning text-white text-center ">Update </button>

                  </form>
                  
                
                
                </td>
                <td>
                  <form action="/articles/{{ $item->id }}"  method="POST">

                    @method('DELETE')                              
                    @csrf

                    <button href="#" class="btn btn-danger  text-center ">delete</button>

                  </form>
                  
                
                 </td>

            </tr>
            @endforeach

            
          </tbody>
        </table> 
      </div>
    </div>
  </div>
</div>

    
@endsection


  
     


 