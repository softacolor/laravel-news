@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                <div class="col-4 col-sm-3 col-xl-2">
                  <img src="{{ asset('backend')}}/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                </div>
                <div class="col-5 col-sm-7 col-xl-8 p-0">
                  <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                  <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                </div>
                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                  <span>
                    <a href="https://www.softacolor.com" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>



    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Video</h4>
            <div class="template-demo">
              <a href="{{ route('add.video')}}"><button type="button" class="btn btn-primary btn-fw" style="float: right;">Add Video</button></a>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> video Title</th>
                    <th> Embed Code</th>
                    <th> video Type</th>
                    <th> Action</th>
                  </tr>
                </thead>

                <tbody>
                  @php($i=1)
                  @foreach ($video as $cat)
                      
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{Str::limit($cat->title,30)}}</td>
                    <td>{{Str::limit($cat->embed_code,30)}}</td>  
                    <td>
                        @if ($cat->type ==1)
                        <span class="badge badge-success">Big video</span>
                        @else
                        <span class="badge badge-info">Small video</span> 
                        @endif
                    </td>
                    <td>
                      <a href="{{route('edit.video', $cat->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{route('delete.video', $cat->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  
                  
                  @endforeach
                  
                </tbody>
              </table>
              {{ $video->links('pagination-links') }}
            </div>
          </div>
        </div>
      </div>
</div>
    
@endsection