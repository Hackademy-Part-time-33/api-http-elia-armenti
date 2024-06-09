<x-main>
    
    <div class="container my-5">
        
        <ul class="list-group">
            @foreach ($data as $item)
            
            <li class="list-group-item" aria-current="true"><a href="{{route('anime.detail', ['id' => $item['mal_id']])}}">{{$item['name']}}</a></li>
            @endforeach    
        </ul>
        
    </div>
    
</x-main>