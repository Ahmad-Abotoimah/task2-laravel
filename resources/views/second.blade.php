@extends('layout.masterpage')
@section('content')
@for ($i = 0; $i < 12; $i++)
<div class="container2">
    <h1>Hello!!</h1>
    <p>this is the <span class="diff">second</span> page</p>
</div>
@endfor

@endsection

