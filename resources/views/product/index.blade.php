


@extends('product.layout');

@section('content')

<div class="jumbotron container">
  <h1 class="display-4">Hello, world!</h1>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<div class="container"> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product name</th>
      <th scope="col">product price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $item)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{item->name}}</td>
      <td>{{item->price}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection