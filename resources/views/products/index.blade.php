@extends('layouts.template');

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
    <a href="{{ route('products.create') }}" class="btn btn-primary btn-icon-split">
  <span class="icon text-white-50">
     <i class="fas fa-plus-square"></i>
       </span>
   <span class="text">Crear Producto</span>
</a>
  </div>
    
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>category_id</th>
            
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>category_id</th>
           
          </tr>
        </tfoot>
          @foreach ($products as $product)
        <tbody>
        
          <tr>
            
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category_id }}</td>
           
          </tr>
          
          
         
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection