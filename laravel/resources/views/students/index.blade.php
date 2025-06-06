<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Students</h1>
    <ul>
        @foreach($students as $student)
            <li>{{ $student->name }} - {{ $student->email }} - {{ $student->course }}</li>
        @endforeach
    </ul>
</body>
</html>
