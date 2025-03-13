@extends('layouts.app')
@section('content')
<center>
<h1>Welcome to My Laravel App</h1>
<br><br>
<p>Manage students and courses easily</p>
<a href="{{route('students')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">manage students</a>

<a href="{{route('courses')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">manage courses</a>
</center>