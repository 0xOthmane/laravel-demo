@extends('base')

@section('body')
Bonjour {{ strtoupper($name) }}

@foreach($posts as $post)
<h1>{{ $post->title }}</h1>
<span>{{ $post->content }}</span>
@endforeach

<form action="" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{old('name')}}">
        @error('email')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10">{{old('message')}}</textarea>
        @error('message')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" value="Submit">
</form>
@endsection