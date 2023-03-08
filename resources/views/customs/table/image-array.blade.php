<div>
    @foreach ($getState() as $item)
    <img src="{{asset('storage/'.$item)}}" alt="" style="height: 100px;">

    @endforeach
</div>
