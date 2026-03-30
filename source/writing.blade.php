---
title: Writing
description: "Posts on enterprise software, backend engineering, and practical AI."
---

@extends('_layouts.main')

@section('body')
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Writing</h1>
    <p class="text-gray-600 mb-10">
        Posts on things I have learned, patterns I use, and observations about building
        enterprise software. Updated when I have something worth saying.
    </p>

    @foreach($writing as $post)
    <article class="mb-10 pb-10 border-b border-gray-100 last:border-0">
        <a href="{{ $post->getUrl() }}" class="group block">
            <h2 class="text-xl font-semibold text-gray-900 group-hover:text-black mb-2">
                {{ $post->title }}
            </h2>
            <p class="text-sm text-gray-500 mb-3">{{ date('F j, Y', $post->date) }}</p>
            <p class="text-gray-600">{{ $post->description }}</p>
        </a>
    </article>
    @endforeach
@endsection
