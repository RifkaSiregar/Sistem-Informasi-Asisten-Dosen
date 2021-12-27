<table class ="table" style="border:1px solid #ddd">
<thead>
<tr>
    <th>Initial</th>
    <th>Activity</th>
    <th>Created at</th>
    <th>Updated at</th>
</tr>
</thead>
<tbody>
      @foreach($activity as $l)
    <tr>
    <td>{{$l->initial}}</td>
    <td>{{$l->activity}}</td>
    <td>{{$l->created_at}}</td>
    <td>{{$l->updated}}</td>
    
    @endforeach
    </tbody>
</table> 