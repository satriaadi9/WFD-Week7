@extends('base.base2')

@section('content')
<div class="container my-4 mx-auto grid grid-cols-1 md:grid-cols-3  gap-4">
    @foreach ($courses as $course)
    <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
        <h1 class="text-slate-900 mt-5 font-medium">{{ $course['course_name'] }}</h1>
        <h3 class="text-slate-900  text-base font-small tracking-tight">{{ $course['course_name_en'] }}</h3>
        <h3 class="text-slate-900  text-base font-small tracking-tight">{{ $course->unit->unit_name }}</h3>
        <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
            The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
        </p>
        <div class="mt-10 flex items-center justify-center">
        <a href="/course/{{$course['id']}}" class="rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold hover:bg-indigo-400 text-white">Details</a>
        </div>
    </div>
    @endforeach
    
    
</div>
@endsection