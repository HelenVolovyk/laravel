<tr>
   <td >
      <a href="{{route('product', [app()->getlocale(), $row->id])}}">
      <strong>{{$row->name}}</strong>
    	</a>
  </td>

  <td>
    <span class ="label label-success"><strong>${{$row->price}}</strong></span>
  </td>
      
  <td>    
  <form action="{{route('wishlist.delete', [app()->getlocale(), $row->id])}}" method="POST"> 
    @method('delete')
    @csrf
    <input type="hidden" value="{{$row->rowId}}" name="rowId">
	 <button type="submit" class="btn btn-danger text-center update__cart">
		<span class="update__cart">X</span>
	</button>
  </form>
  </td>

</tr>
  
  