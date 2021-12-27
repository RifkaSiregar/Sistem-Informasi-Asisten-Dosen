<table class ="table" style="border:1px solid #ddd">
<thead>
<tr>
    <th>Student Name</th>
    <th>Course</th>
</tr>
</thead>
<tbody>
      @foreach($announcement as $a)
    <tr>
    <td>{{$a->student_name}}</td>
    <td>{{$a->course}}</td>
    @endforeach
    </tbody>
</table> 