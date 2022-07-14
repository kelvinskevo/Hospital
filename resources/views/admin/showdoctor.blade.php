<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
        @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->
          @if(session()->has('message'))

            <div class="alert alert-danger" style="position: absolute;">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>


            @endif
       <div class="page-body-wrapper" style="width: 100%">

        
            <div class="table-responsive" style="width: 100%">
                @if(session()->has('message'))

            <div class="alert alert-danger" style="position: absolute; z-index: 1000; width:40%; margin-top: 10%">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>

            @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th>Doctor name</th>
                        <th>Phone</th>   
                        <th>Speciality</th>
                        <th>Room No</th>
                        <th>image</th>
                        <th>Update</th>
                        <th>Delete</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                         @foreach ($data as $doctor)
                         <tr>
                            <td>Dr. {{$doctor->name}}</td>
                            <td>{{$doctor->phone}}</td>
                            <td>{{$doctor->speciality}}</td>
                            <td>{{$doctor->room}}</td>
                            <td><img src="doctorimage/{{$doctor->image}}"></td>
                            <td><a class="btn btn-success" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you Sure to Delete Doctor?')"  href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
                         </tr>
                        
                         @endforeach
                    </tbody>

                    
                </table>
            </div>
       </div>


        
    @include('admin.script')
  </body>
</html>