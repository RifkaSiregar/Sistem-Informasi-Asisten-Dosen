<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            <th>Course Code</th>
            <th>Name</th>
            <th>Credit</th>
            <th>Lecturer Initial</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $c)
        <tr>
            <td>{{$c->course_code}}</td>
            <td>{{$c->name}}</td>
            <td>{{$c->credit}}</td>
            <td>{{$c->lecturer_initial}}</td>
            @endforeach
    </tbody>
</table>