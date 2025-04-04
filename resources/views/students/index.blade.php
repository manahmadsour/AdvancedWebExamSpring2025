@extends('layouts.app')
@section('content')

<input type="text" value="Name" id="Studentname">
<br><br>

@foreach($courses in course)


@endforeach
<ul role="list" class="divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="size-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p class="text-sm/6 font-semibold text-gray-900">{{$course->name}}</p>
        <p class="mt-1 truncate text-xs/5 text-gray-500">{{$course->description</p>
      </div>
    </div>
    @endforeach