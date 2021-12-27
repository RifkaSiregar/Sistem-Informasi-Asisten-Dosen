<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            <th>Course Initial</th>
            <th>Session</th>
            <th>Duration</th>
            <th>Week</th>
            <th>Date Time</th>
            <th>Teaching Assistant</th>
        </tr>
    </thead>
    <tbody>
        @foreach($schedules as $s)
        <tr>
            <td>{{$s->course_initial}}</td>
            <td>{{$s->session_name}}</td>
            <td>{{$s->duration}}</td>
            <td>{{$s->week}}</td>
            <td>{{$s->date_time}}</td>
            <td>{{$s->ta_initial}}</td>
            @endforeach
    </tbody>
</table>