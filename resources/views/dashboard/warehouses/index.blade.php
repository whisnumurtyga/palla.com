@extends('dashboard/layouts/main')

@section('container')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt=5">{{ auth()->user()->name }}'s  Warehouses</h1>
    </div>

    <a href="/dashboard/warehouses/create" class="btn btn-sm btn-warning mt-3 mb-4">Add Warehouse</a>
    <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Location</th>
              <th scope="col">Luas</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($warehouses as $warehouse)                
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $warehouse->title }}</td>
              <td>{{ $warehouse->location->name }}</td>
              <td>{{ $warehouse->type->type }}</td>
              <td>{{ $warehouse->harga }}</td>
              <td>
                <a href="/dashboard/warehouses/{{ $warehouse->slug }}" class="btn btn-primary btn-sm" style="border-radius: 30px; color: white;"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/warehouses/{{ $warehouse->slug }}/edit" class="btn btn-warning btn-sm" style="border-radius: 30px; color: black;"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/warehouses/{{ $warehouse->slug }}" method="post" class="d-inline">
                  @method('delete')
                      @csrf
                  <button type="submit" class="border-0  btn btn-danger btn-sm" style="border-radius: 30px; color: white;" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button> 
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


    
@endsection