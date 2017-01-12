@foreach($posts as $post)
<div class='col-xs-12 question-block'>
	<h3>{{ $post->question }}</h3>
  <div class="answer-block">
    <p>{{ str_limit($post->answer, 400) }}</p>
  </div>
</div>
@endforeach
