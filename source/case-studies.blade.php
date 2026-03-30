---
title: Case Studies
description: "Detailed walkthroughs of real projects — the problems, constraints, decisions, and lessons."
---

@extends('_layouts.main')

@section('body')
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Case Studies</h1>
    <p class="text-gray-600 mb-10">
        Detailed walkthroughs of real projects. Each one covers the problem, the constraints,
        the approach I took, and what I learned.
    </p>

    @foreach($case_studies as $study)
    <article class="mb-10 pb-10 border-b border-gray-100 last:border-0">
        <a href="{{ $study->getUrl() }}" class="group block">
            <h2 class="text-xl font-semibold text-gray-900 group-hover:text-black mb-2">
                {{ $study->title }}
            </h2>
            <p class="text-sm text-gray-500 mb-3">{{ date('F j, Y', $study->date) }}</p>
            <p class="text-gray-600">{{ $study->description }}</p>
        </a>
    </article>
    @endforeach
@endsection
