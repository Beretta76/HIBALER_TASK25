﻿@extends('layout')
 
@section('title', 'Greeting Page')
 
@section('content')
    <h1>Hello, {{ $name }}!</h1>
    <p>Welcome to our Laravel site.</p>
@endsection