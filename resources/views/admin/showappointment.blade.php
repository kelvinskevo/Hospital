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
        <div class="page-body-wrapper" style="width: 100%">
            <div class="table-responsive" style="width: 100%">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Patients name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Approved</th>
                        <th>Canceled</th>
                        <th>Send Mail</th>
                    </tr>
                    </thead>
                    <tbody>
                         @foreach ($data as $appoint)
                         <tr>
                            <td>{{$appoint->name}}</td>
                            <td>{{$appoint->email}}</td>
                            <td>{{$appoint->phone}}</td>
                            <td>{{$appoint->doctor}}</td>
                            <td>{{$appoint->date}}</td>
                            <td>{{$appoint->message}}</td>
                            <td>{{$appoint->status}}</td>
                             <td><a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">send mail</a></td>
                            <td><a class="btn btn-success" href="{{url('approve', $appoint->id)}}">Approv</a></td>
                            <td><a class="btn btn-danger"  href="{{url('cancelapointment', $appoint->id)}}">Cancel</a></td>
                         </tr>
                        
                         @endforeach
                    </tbody>

                    
                </table>
            </div>
        </div>


        
    @include('admin.script')
  </body>
</html>