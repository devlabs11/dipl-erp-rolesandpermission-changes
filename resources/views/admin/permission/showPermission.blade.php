

<div class="content-wrapper pl-5 pt-1 pb-1" style="min-height: 880;" >

    <header class="text-center">
        <div class="rounded-rectangle border p-3 my-4 pl-5 pr-5 d-inline-block bg-white">
          <h1 class="">PERMISSIONS</h1>
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      </header>
    <br>
    <th><span><button class="btn btn-info ml-5"><a class="text-light" href="/addPermission">ADD</a></button></span></th>

    <br>
    <br>
  <table class="table ml-5 mr-5 pd-5">
      <thead>
          <tr>
              <th scope="col">PERMISSION NAME</th>
              <th scope="col">GUARD NAME</th>
              <th scope="col">ACTION</th>

          </tr>
      </thead>
       <tbody>
        @foreach($sp as $print)              
        <tr>
                 
                  <td>{{$print->name }}</td>
                  <td><span class="badge badge-warning">{{$print->guard_name }}</span></td>
                  <td>


                    <span class="my-1 pl-2 pr-3">
                        <a href="/edit-permission/{{ encrypt($print->id) }}">
                         <i class="fas fa-edit" style="color:rgb(0, 255, 179)">edit</i>
                     </a>
                     </span>

                     <span class="my-1 pl-2 pr-5">
                        <a href="/delete-permission/{{ encrypt($print->id) }}" onclick="return confirm('Are you sure you want to delete this Permission?')">
                         <i class="fas fa-trash" style="color:rgb(228, 49, 4)">delete</i>
                     </a>
                     </span>

                  </td>
              </tr>
          @endforeach
     
      
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  

     
  


@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


