@foreach($blog as $blogs)
<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
        <h3 class="mb-0"><a href="/article/{{$blogs -> id}}">{{ $blogs -> title}}</a></h3>
        <p style="width:100%;height:auto;margin:auto;white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;  white-space: -o-pre-wrap;word-wrap: break-word;  overflow:hidden;display: -webkit-box;-webkit-line-clamp: 6; -webkit-box-orient: vertical;white-space: normal;">{!! strip_tags($blogs -> body)!!}<a href="/article/{{$blogs -> id}}">...more</a></p>
    </div>
    <div class="flex-shrink-0"><span class="text-primary">{{ $blogs -> created_at -> format('Y-m-d') }}</span></div>
</div>
@endforeach
<div>
            {{ $blog -> fragment('blog') -> links() }}
</div>