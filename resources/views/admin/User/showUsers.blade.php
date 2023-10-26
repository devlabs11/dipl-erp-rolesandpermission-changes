<div class="content-wrapper">
    <header class="text-center">
        <div class="rounded-rectangle border my-5 pl-2 pr-2 pt-2 pb-2 d-inline-block bg-white">
            <h1 class="">ALL USERS</h1>
    
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
 

    </header>
@can('show-user')
    <br>
    <br>
    <br>

    @can('add-user')
    <span><button class="btn btn-info ml-5"><a class="text-light" href="/addUser">ADD</a></button></span>
    @endcan
    <br>
    <br>
    
    <table class="table ml-5 mr-5 pd-5">
        <thead>
            <tr>
                <th scope="col">UNIQUE ID</th>
                <th scope="col">FULL NAME</th>
                <th scope="col">USERNAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">USER CODE</th>
                <th scope="col">USER STATUS</th>
                <th scope="col">ROLE</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($show as $print)
                <tr>

                @if($print->unique_id !=null)
                    <td>{{ $print->unique_id }}</td>
                    @else
                    <td style="color:red">NULL</td>
                    @endif
    
                    @if($print->fullname !=null)
                    <td>{{ $print->fullname }}</td>
                    @else
                    <td style="color:red">NULL</td>
                    @endif

                    @if($print->username !=null)

                    <td>{{ $print->username }}</td>
                    @else
                    <td style="color:red">NULL</td>
                    @endif
                    @if($print->emailid !=null)
                    <td>{{ $print->emailid }}</td>
                    @else
                    <td style="color:red">NULL</td>
                    @endif

                    @if($print->usercode !=null)

                    <td>{{$print->usercode}}</td>
                    @else
                    <td style="color:red">NULL</td>
                    @endif


                    @if ($print->status == 1)
                        <td style="color:green">Active</td>
                    @else
                        <td style="color:red">Inactive</td>
                    @endif

                    <td>
                        @if ($print->roles)
                            @foreach ($print->roles as $role)
                                <span class="badge badge-warning">{{ $role->name }}</span>
                            @endforeach
                        @endif
                    </td>

                    <td>
                           @can('update-user')
                            <span class="my-1 pl-2 pr-2">
                                <a href="/edit/{{ encrypt($print->id) }}">
                                    <i class="fas fa-danger" style="color:blue;">edit</i>
                                </a>
                            </span>
                            @endcan

                            @can('delete-user')
                            <span class="my-1 pl-2 pr-5">
                                <a href="/delete/{{ $print->id }}" class="delete"
                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="fas fa-trash" style="color:red">delete</i>
                                </a>
                            </span>
                            @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endcan
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('a.delete').click(function(event) {
            event.preventDefault();
            var url = $(this).attr('href');
            if (confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(result) {
                        alert('User has been deleted.');
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('There was an error deleting the user. Please try again.');
                    }
                });
            }
        });
    });
</script>
