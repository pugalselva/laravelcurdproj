<!DOCTYPE html>
<html>
<head>
    <title>Create </title>
</head>
<body>

    <h1>Student Registration form</h1>
    <div class="pull-right">
        <a href="{{ route('students.index') }}"> Back</a>
    </div>
    @if(session('status'))
        
        {{ session('status') }}
        
    @endif
    {{-- csrf performing actions on a web application where they are authenticated. --}}
    {{-- @csrf in a form, Laravel generates a hidden input field containing a CSRF token. --}}

    <!-- Form starts here -->
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name"> Student Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="email"> Student Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="phone"> Student Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
        @error('phone')
             <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="address"> Student Address:</label>
        <textarea id="address" name="address">{{ old('address') }}</textarea>
        @error('address')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
