<h1>My Form</h1>

<form method="post" action="submitfrm">
    {{@csrf_field()}}
    <input type="text" name="firstname">
    <input type="submit" name="submit">
</form>