
    <div class="content-wrapper">
        <br>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <form method="POST" id="form" action="{{ route('showroles_and_permissions') }}">
            @csrf
            <div class="form-group ml-5" style="text-align:center; padding-bottom:20px;">
                <label for="role"><span class="badge badge-info">SELECT ROLE</span></label>
                <br>
                <br>
                <select class="form-control" id="role" name="role" data-url="{{ route('fetchPermission') }}">
                    <option value="">select</option>
                    
                    @foreach ($Ads as $role)
                     
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                    
                    @endforeach
                </select>
            </div>
            <div id="fetch" class="my-5" style="padding-left:29px ;">
            
            </div>
            <button type="submit" id="submit" class="btn btn-primary ml-5">Submit</button>
           

        </form>

       
   

        <script src="{{ asset('js/admin_js/rolesAndpermission.js') }}"></script>
    
