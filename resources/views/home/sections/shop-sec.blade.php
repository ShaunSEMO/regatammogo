<div class="container">
    <h2>Shop at Her.Styl</h2>
        @foreach($items as $item)
        <br>
        <img style="width:50%;" class="img-fluid" src="{{ asset($item->image) }}" alt="Post header image">
        <h3>{!! $item->name !!}</h3>
        <br>
        <h6>Color: {!! $item->color !!}</h6>
        <br>
        <h6>Desc: {!! $item->size !!}</h6>
        <br>
        <p>Description: {!! $item->description !!}</p>
        <br>
        <h5>Price: {!! $item->price !!}</h5>
        <a href="shop/{{$item->id}}">Order</a>
        <br><hr>
        @endforeach
        <a href="{{ url('shop') }}" class="btn btn-dark">Go to shop</a>
    </div>