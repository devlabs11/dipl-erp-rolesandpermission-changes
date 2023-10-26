<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="content-wrapper pl-5 pt-1 pb-1" style="min-height: 880;">

    <header class="text-center">
        <div class="rounded-rectangle border p-1 pl-5 pr-5 my-5 d-inline-block bg-white">
            <h1 class="">EDIT USER</h1>
        </div>
    </header>
    <br>

    <form method="POST" id="form" style="" action="{{ route('store') }}">
        @csrf

        <div class="form-group">
            <label for="unique_id">UNIQUE ID<span id="astrick">*</span></label>
            <input type="text" class="form-control" id="unique_id" autocomplete="off" name="unique_id"
                value={{$edit->unique_id}}>
        </div>

        <div class="form-group">
            <label for="fullname">Full Name<span>*</span></label>
            <input type="text" class="form-control" id="fullname" autocomplete="off" name="fullname"
                value={{$edit->fullname}}>
        </div>

        <div class="form-group">
            <label for="username">Username<span>*</span></label>
            <input type="text" class="form-control" id="username" autocomplete="off" name="username"
                value={{$edit->username}}>
        </div>

        <div class="form-group">
            <label for="password">Password<span>*</span></label>
            <input type="password" class="form-control" id="password" autocomplete="off" name="password"
                value={{$edit->password}}>
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" value={{$edit->designation}}>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" value={{$edit->position}}>
        </div>

        <div class="form-group">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" value={{$edit->site}}>
        </div>

        <div class="form-group">
            <label for="status">User Status<span>*</span></label>
            <select name="status" class="form-control">
                <option value="">select</option>
                <option type="text" value="1" {{ isset($edit->status) && $edit->status == 1 ? 'selected' : '' }}>Active
                </option>
                <option type="text" value="0" {{ isset($edit->status) && $edit->status == 0 ? 'selected' : '' }}>
                    Inactive</option>
            </select>
        </div>

        <div class="form-group">
            <label for="emailid">Email ID</label>
            <input type="text" class="form-control" id="emailid" name="emailid" value={{$edit->emailid}}>
        </div>

        <div class="form-group">
            <label for="usercode">User Code</label>
            <input type="text" class="form-control" id="usercode" name="usercode" value={{$edit->usercode}}>
        </div>

        <div class="form-group">
            <label for="maker_checker">Maker Checker</label>
            <input type="text" class="form-control" id="maker_checker" name="maker_checker"
                value={{$edit->maker_checker}}>
        </div>

        <div class="form-group">
            <label for="role">Role<span>*</span></label>
            <select class="role form-control" name="role">
                <option value="">select</option>
                @foreach ($roleForUpdate as $role)
                <option value="{{ $role->id }}" {{ in_array($role->id, $roleId) ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value={{$edit->mobile}}>
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control" id="avatar" name="avatar" value={{$edit->avatar}}>
        </div>

        <span><button type="submit" class="btn btn-primary">SUBMIT</button> </span>
        <span> <button class="btn btn-danger"> <a class="text-light" href="/showUsers">CANCEL</a></button></span>
    </form>
</div>

<style>
label span {
    color: red;
}
</style>