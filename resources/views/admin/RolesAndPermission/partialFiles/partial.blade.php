<head>
    
    <style>
        .checkbox-container {
            margin-left: 18px;
            margin-right: 5px;
            border: 4px solid #ccc; 
            padding: 5px; 
            border-radius: 5px; 
            display: inline-block; 
            color: green;
            margin-top:20px;
        }

        .checkbox-container label {
            display: inline; 
            margin-left: 5px; 
        }
    </style>
    
</head>
@foreach ($permission_data as $print)
    <div class="checkbox-container">
        <input type="checkbox" id="check" value="{{ $print->id }}" {{ in_array($print->id, $rolepermission) ? 'checked' : '' }} name="permission[]">
        <label for="check">{{ $print->name }}</label>
    </div>
@endforeach
