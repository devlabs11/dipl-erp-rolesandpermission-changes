<div class="content-wrapper">

    <header class="text-center">
        <div class="rounded-rectangle border my-3 pl-2 pr-2 pt-2 pb-2 d-inline-block bg-white">
            <h1 class="">ALL ROLES</h1>
        </div>
    </header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    @can('role-add')
    <span><button class="btn btn-info ml-5"><a class="text-light" href="/addRoles">ADD</a></button></span>
    @endcan


    <br>
    <br>
    <table class="table table-hover ml-5 mr-5 pd-5">
        @php
        $counter = 1;
        @endphp
        <thead>
            <tr>
                <th scope="col">SR NO</th>
                <th scope="col">ROLE NAME</th>
                <th scope="col">GUARD NAME</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Ad as $print)
            <tr>
                <td>{{ $counter }}</td>
                <td>{{ $print->name }}</td>

                <td><span class="badge badge-warning">{{ $print->guard_name }}</span></td>

                <td>

                    @can('role-update')
                    <span class="my-1 pl-2 pr-3">

                        <a href="/edit-role/{{ encrypt($print->id) }}">
                            <i class="fas fa-edit" style="color:rgb(0, 255, 179)">edit</i>
                        </a>

                    </span>

                    @endcan

                    @can('role-delete')

                    <span class="my-1 pl-2 pr-3">
                        <a href="/delete-role/{{ $print->id }}" class="delete-role"
                            onclick="return confirm('Are you sure you want to delete this role?')">
                            <i class="fas fa-trash" style="color:red">delete</i>
                        </a>
                    </span>

                    @endcan

                </td>
            </tr>
            @php
            $counter++;
            @endphp
            @endforeach


    </table>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif