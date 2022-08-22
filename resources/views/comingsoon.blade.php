@extends('layouts.app')

@section('content')
<main class="flex flex-col py-20 container gap-10 text-center items-center justify-center">
    <div class="max-w-xs container flex ">
        <img src=" {{asset('images/loading.svg')}} " alt="coming soon" class="max-w-full max-h-full">
    </div>
    <h1 class="font-bold text-2xl md:text-6xl text-[#a3002e] uppercase my-0 leading-none"> coming soon </h1>
</main>
@endsection