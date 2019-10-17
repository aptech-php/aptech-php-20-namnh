@foreach($articles as $article)
<div>
  <h2>Category: {{$article->category["name"]}}</h2>
  <h1>
    <a href="{{route('articles.show', $article->id)}}">
      {{$article->title}}
    </a>
  </h1>
  <p>
    {{$article->description}}
  </p>

</div>
<hr>
@endforeach