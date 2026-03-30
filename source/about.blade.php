---
title: About
description: "How I think about engineering, the domain I work in, and what I value."
---

@extends('_layouts.page')

@section('content')
    <h2>How I Work</h2>

    <p>
        I am a backend-heavy full-stack engineer working on PLM-based ERP systems. That means I spend
        most of my time inside enterprise SaaS products — the kind of software that manages product
        lifecycles, bills of materials, procurement workflows, and manufacturing data for real businesses.
    </p>

    <p>
        These systems are not glamorous. They have complex data models, deep permission layers, long-lived
        transactions, and users who rely on them every day to do their jobs. When something breaks, it costs
        money and trust. That shapes how I write code.
    </p>

    <p>
        I default to the boring choice. If a well-understood pattern solves the problem, I use it. If a new
        tool introduces risk without clear payoff, I skip it. I write code that I expect someone else to
        maintain in two years without needing to call me. I think carefully about database schema decisions
        because I know they will outlive the application layer above them.
    </p>

    <h2>On AI in Enterprise Systems</h2>

    <p>
        I integrate AI into ERP workflows — not as a product feature to announce, but as a tool to reduce
        friction in specific, well-scoped tasks. I have built chatbot interfaces, intent-handling pipelines,
        SQL assistance layers, and domain-specific response systems using Azure OpenAI. Every one of those
        features was designed with the same question: what happens when the model is wrong, and can the user
        recover?
    </p>

    <p>
        I am not an AI researcher. I am an engineer who applies AI inside systems that have real business
        constraints. That distinction matters.
    </p>

    <h2>Tools and Environment</h2>

    <p>
        My primary stack is Laravel, PHP, and MySQL. I work with HTML, CSS, and JavaScript on the frontend,
        and I am moving toward Vue, Inertia, and Tailwind for new UI work. My development workflow runs on
        GitHub Enterprise, GitHub Copilot, Azure DevOps, and Docker.
    </p>

    <p>
        In past work, I have built APIs, analytics pipelines on ClickHouse, services backed by MongoDB, and
        various third-party integrations. I choose tools based on what the problem needs, not what looks good
        on a resume.
    </p>

    <h2>What I Value</h2>

    <p>
        Reliability over cleverness. Maintainability over speed. Shipping over perfecting. Solving the actual
        problem over solving an interesting abstraction of it.
    </p>

    <p>
        I believe the best engineering work is often invisible — systems that just work, migrations that happen
        without downtime, features that users adopt without needing a manual.
    </p>
@endsection
