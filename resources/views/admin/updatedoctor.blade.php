<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
        @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->
        <div class="page-body-wrapper bg-dark pt-5" style="width: 100%">
            <div class="p-5" >
                <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Doctor Name</label>
                        <input type="text" name="name" class="form-control bg-dark" value="{{$data->name}}">
                    </div>

                     <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control bg-dark" value="{{$data->phone}}">
                    </div>

                     <div class="form-group">
                        <label>Speciality</label>
                        
                        <select class="form-control" name="speciality" id="" class="form-control bg-dark" required>
                            <option>{{$data->speciality}}</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Allergy and immunology">Allergy and immunology</option>
                            <option value="Anesthesilogy">Anesthesilogy</option>
                            <option value="Neurolgy">Neurolgy</option>
                            <option value="Pathology">Pathology</option>
                            <option value="Pediatrics">Pediatrics</option>
                            <option value="Urology">Urology</option>
                            <option value="General Health">General Health</option>
                            <option value="Dental">Dental</option>
                            <option value="Plastics">Plastics</option>

                        </select>
                    </div>

                     <div class="form-group">
                        <label>Room</label>
                        <input type="text" name="room" class="form-control bg-dark" value="{{$data->room}}">
                    </div>

                     <div class="form-group">
                        <label>Image</label>
                        <img style="border-radius: 50%" height="150" width="150" src="doctorimage/{{$data->image}}">
                    </div>

                    <div class="form-group">
                        <label>Change Piture</label>
                        <input type="file" name="file" class="form-control bg-dark" >
                    </div>

                    <div class="form-group">
                        
                        <input type="submit" name="file" class="btn btn-primary" value="update" >
                    </div>
                </form>
            </div>
        </div>


        
    @include('admin.script')
  </body>
</html>