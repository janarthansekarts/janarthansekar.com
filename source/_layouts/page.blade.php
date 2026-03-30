@extends('_layouts.main')

@section('title', $page->title . ' | ' . $page->siteName)
@section('description', $page->description ?? $page->siteDescription)

@section('body')
    <article>
        <h1 class="text-3xl font-bold text-gray-900 mb-8">{{ $page->title }}</h1>
        <div class="prose prose-gray max-w-none">
            @yield('content')
        </div>
    </article>
@endsection
