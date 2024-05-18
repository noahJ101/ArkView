@extends('backend.layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ url('assets/tagsinput/bootstrap-tagsinput.css') }}">
@endsection
@section('content')


<section class="section">
    <div class="row">
     

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Page</h5>

            
            <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Slug</label>
                    <input type="text" name="slug" value="{{ $getRecord->slug }}"  required class="form-control" id="inputEmail4">
                  </div>

      
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Title</label>
                <input type="text" name="title"  required value="{{ $getRecord->title }}" class="form-control" id="inputEmail4">
              </div>



              <div class="col-12">
                <label for="inputEmail4" class="form-label">Description</label>
                <textarea class="form-control tinymce-editor"  name="description">{{ $getRecord->description }}</textarea> 
              </div>

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Meta Title</label>
                <input type="text" name="meta_title" value="{{ $getRecord->meta_title }}" class="form-control" id="inputNanme4">
              </div>

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Meta Description</label>
                <textarea class="form-control" name="meta_description"  class="form-control" id="inputNanme4">{{ $getRecord->meta_description }}</textarea>
              </div>

              

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Meta Keywords</label>
                <input type="text" name="meta_keywords"  class="form-control" value="{{ $getRecord->meta_keywords }}" id="inputNanme4">
              </div>
              
              <div class="col-12" style="margin-top: 30px;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          </div>
        </div>

       

      </div>
    </div>
  </section>  

    @endsection

    @section('script')

    <script src="{{ url('assets/tagsinput/bootstrap-tagsinput.js') }}"></script>
   
    <script type="text/javascript">
    $("#tags").tagsinput();
    </script>
    
@endsection
