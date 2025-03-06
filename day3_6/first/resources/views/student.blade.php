<h2 style="text-align:center">Student Details</h2>
<table border="1" align="center">
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Class</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>My Roll No. is: {{ $student['roll'] }}</td>
        <td>My Name is: {{ $student['name'] }}</td>
        <td>Class: {{ $student['class'] }}</td>
    </tr>
    @endforeach
</table>