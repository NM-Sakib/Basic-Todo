
    <div class="flash-error">
        <b>There are some errors in your submission:</b>
        @foreach ($errors ->all() as $item)
            <p>{{$item}}</p>
            
        @endforeach
    </div>