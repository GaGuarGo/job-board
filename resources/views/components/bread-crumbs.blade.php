<nav {{$attributes}}>
    <ul class="flex space-x-4 text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>

        @foreach($links as $label => $link)
            <li>
                <a href="/">→</a>
            </li>
            <li>
                <a href="{{$link}}">{{$label}}</a>
            </li>
        @endforeach
    </ul>
</nav>
