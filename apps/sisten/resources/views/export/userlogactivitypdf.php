<table class="table" style="border:1px solid #ddd">
        <thead>
                <tr>
                        <th>Initial</th>
                        <th>Activity</th>
                        <th>Access Time</th>
                </tr>
        </thead>
        <tbody>
                @foreach($courses as $c)
                <tr>
                        <td>{{$c->initial}}</td>
                        <td>{{$c->activity}}</td>
                        <td>{{$c->created_at}}</td>
                        @endforeach
        </tbody>
</table>