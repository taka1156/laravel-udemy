<h1>test</h1>
<ul>
@foreach ($values as $value)
 <li>{{ $value->id }} - {{ $value->text }}</li>
@endforeach
</ul>