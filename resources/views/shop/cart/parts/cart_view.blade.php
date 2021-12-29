<tr class="cart__table-value">
   <td>
	  <a href="{{route('product', [app()->getlocale(), $row->id])}}">
      <strong>{{$row->name}}</strong>
    </a>
  </td>
  
    
	<td>    
		<form action="{{route('cart.count.update', [app()->getlocale(), $row->id])}}" method="POST"> 
	@csrf
	
			<input type="hidden" value="{{$row->rowId}}" name="rowId">
			<div class="d-flex ">
				<input type="number" min="1"  value="{{$row->qty}}" name="product_count" style="width: 30px; height: 25px; margin-right:10px">
		
				<button type="submit" class="btn btn-success btn-sm  update__cart text-center" >
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
						<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
					</svg>
				</button>	
		
			</div>		


		</form>
	</td>
	<td>
		<span class ="label label-success"><strong>{{$row->price}} грн</strong></span>
	</td>
	<td>
		<span class ="label label-success"><strong>{{$row->total}} грн</strong></span>
	</td>
	<td>
		<form action="{{route('cart.delete', [app()->getlocale(), $row->id ])}}" method="POST"> 
		@method('DELETE')
		@csrf
			<input type="hidden" value="{{$row->rowId}}" name="rowId">
		
			<button type="submit" class="btn btn-danger text-center update__cart">
				<span class="update__cart">X</span>
			</button>
		
		</form>
	</td>

</tr>



    {{-- <div class="btn-group">
      <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
        Action <span class="caret"></span>
      </button>
       
      <ul class="dropdown-menu">
        <li><a href="{{route('product.addByOne', ['id'=>$product['product']['id']])}}">Add by 1</a></li>
        <li><a href="{{route('product.reduceByOne', ['id'=>$product['product']['id']])}}">Reduce by 1</a></li>
        <li><a href="{{route('product.remove', ['id'=>$product['product']['id']])}}">Reduce by all</a></li>
      </ul>
    </div> --}}
  