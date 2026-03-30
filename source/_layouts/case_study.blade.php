@extends('_layouts.main')

@section('title', $page->title . ' | ' . $page->siteName)
@section('description', $page->description ?? $page->siteDescription)

@section('body')
    <article>
        <header class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900 mb-3">{{ $page->title }}</h1>
            <p class="text-sm text-gray-500">
                {{ date('F j, Y', $page->date) }}
            </p>
        </header>

        <div class="prose prose-gray max-w-none">
            @yield('content')
        </div>

        <footer class="mt-16 pt-8 border-t border-gray-200">
            <a href="/case-studies" class="text-gray-600 hover:text-gray-900 text-sm">&larr; Back to Case Studies</a>
        </footer>
    </article>
@endsection
