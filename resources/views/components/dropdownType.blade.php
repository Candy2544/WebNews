@foreach($type as $row)
<option value="{{$row -> id_type}}">{{$row -> type}}</option>
@endforeach