@extends('product.layout')

@section('content')
<div class= "container" style="padding-top: 6%" >
<div class="card ">
  <div class="card-body">
   
   
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>


  <div class="container"  style="padding-top: 3%">
  
  <form  action= "{{route('products.store')}}" method="POST">
    @csrf 
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text"  name="name" class="form-control"  placeholder="product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">price</label>
    <input type="text"  name="price" class="form-control"  placeholder="product price">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">details</label>
    <textarea class="form-control"   name="detail" rows="3"></textarea>
  </div>

<div class="form-group" style="padding-top: 0.5%">

<button type="submit" class="btn btn-secondary">save</button>
</div>
  
</form>


  </div>
@endsection
