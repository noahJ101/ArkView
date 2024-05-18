@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')


  <section class="section">
    <div class="row">
    

      <div class="col-lg-12">

        @include('layouts._messages')

        <div class="card">
            
          <div class="card-body">
            
            <h5 class="card-title">Page List
                <a href="{{ url('panel/page/add') }}" class="btn btn-primary" style="float: right;
                margin-top: -12px;">Add New</a>
            </h5>

            

           

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  
                  <th scope="col">Slug</th>
                  <th scope="col">Title</th>
                  <th scope="col">Meta Title</th>
                  <th scope="col">Created Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
                @forelse ($getRecord as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                   
                    <td>{{ $value->slug }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->meta_title }}</td>
                    <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                    <td>
                      <div class="btn-group" role="group">
                          <a href="{{ url('panel/page/edit/'.$value->id) }}" style="margin-right: 10px" class="btn btn-primary btn-sm">Edit</a>
                          
                          
                      </div>
                  </td>
                  </tr> 
                @empty
                <tr>
                    <td colspan="100%">Record not found.</td>
                </tr>
                    
                @endforelse
                
              </tbody>
            </table>
            
            

          </div>
        </div>

       

      </div>
    </div>
  </section>
    @endsection

    @section('script')
@endsection
