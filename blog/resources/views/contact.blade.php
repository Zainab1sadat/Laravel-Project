@extends('layouts.master')

@section('content')
<h1>Contact</h1>
<div class="card col-md-6 mx-auto">
<form  @if(isset($note)) action="{{route('update',['id'=>$note->id])}}"  @else action="/save" @endif method="post">
    @csrf
    @if(isset($note))
      @method("PUT")
    @endif
    <div class="form-group">
        <div class="form-row">
            <label for="mass">Note</label>
            <input type="text" name="note" @if(isset($note)) value="{{$note->note}}" @endif placeholder="Your Note" class="form-control">
            @error('note')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-row justify-content-center p-4">
            <button class="btn btn-success">save</button>
        </div>
    </div>
</form>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notes as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->note}}</td>
            <td><a href="{{route('delete',['id'=>$item->id])}}">Delete</a> |
            <a href="{{route('edit',['id'=>$item->id])}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection