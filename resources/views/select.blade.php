<table>

@foreach($selectKey as $item)
<tr>
   <td>{{$item->id}}</td>
   <td>{{$item->name}}</td>
   <td>{{$item->class}}</td>
   <td>{{$item->roll}}</td>
   
@endforeach
</table