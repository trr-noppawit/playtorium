@extends('layouts.app')

@section('content')
  <h3>Home</h3>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
