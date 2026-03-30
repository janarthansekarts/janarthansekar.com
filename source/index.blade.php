@extends('_layouts.main')

@section('body')
    {{-- Hero --}}
    <section class="mb-16">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-6">
            I build backend systems for enterprise&nbsp;SaaS.
        </h1>
        <p class="text-lg text-gray-600 leading-relaxed max-w-prose">
            I work on PLM-based ERP platforms running on Laravel, PHP, and MySQL. I focus on
            reliability, maintainability, and integrating AI where it actually helps. This is where
            I write about what I learn.
        </p>
    </section>

    {{-- What you will find --}}
    <section class="mb-16">
        <h2 class="text-sm font-semibold uppercase tracking-wide text-gray-400 mb-6">What you will find here</h2>
        <div class="space-y-4">
            <a href="/about" class="block group">
                <p class="text-gray-900 font-medium group-hover:text-black">About</p>
                <p class="text-sm text-gray-500">How I think about engineering and the domain I work in.</p>
            </a>
            <a href="/work" class="block group">
                <p class="text-gray-900 font-medium group-hover:text-black">Work</p>
                <p class="text-sm text-gray-500">The kinds of systems I build, organized by problem space.</p>
            </a>
            <a href="/case-studies" class="block group">
                <p class="text-gray-900 font-medium group-hover:text-black">Case Studies</p>
                <p class="text-sm text-gray-500">Detailed walkthroughs of real projects.</p>
            </a>
            <a href="/writing" class="block group">
                <p class="text-gray-900 font-medium group-hover:text-black">Writing</p>
                <p class="text-sm text-gray-500">Posts on enterprise software, backend engineering, and practical AI.</p>
            </a>
        </div>
    </section>

    {{-- Recent writing --}}
    @if($writing->count() > 0)
    <section>
        <h2 class="text-sm font-semibold uppercase tracking-wide text-gray-400 mb-6">Recent writing</h2>
        <ul class="space-y-4">
            @foreach($writing->take(3) as $post)
            <li>
                <a href="{{ $post->getUrl() }}" class="group block">
                    <p class="text-gray-900 font-medium group-hover:text-black">{{ $post->title }}</p>
                    <p class="text-sm text-gray-500">{{ date('F j, Y', $post->date) }}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </section>
    @endif
@endsection
