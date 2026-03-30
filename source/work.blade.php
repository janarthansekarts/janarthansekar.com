---
title: Work
description: "The kinds of systems I build, organized by problem space."
---

@extends('_layouts.page')

@section('content')
    <p class="text-lg text-gray-600 mb-10">
        I have spent my career building and maintaining enterprise backend systems. Here is what that work
        looks like, organized by the types of problems I solve rather than by employer or job title.
    </p>

    <h2>Enterprise ERP Backend Systems</h2>

    <p>
        ERP systems are the backbone of how companies manage their operations — from product data and
        engineering changes to procurement, manufacturing, and supply chain. I build and maintain the
        backend of a PLM-based ERP platform that serves real production workloads daily.
    </p>

    <p>
        This means working with complex relational data models, multi-step approval workflows, role-based
        access control, audit logging, and integrations with external business systems. The code needs to
        be correct, performant under load, and maintainable by a team over years. I care about schema
        design, query performance, and making sure the next developer can understand what I built.
    </p>

    <h2>AI Integration in Business Workflows</h2>

    <p>
        I integrate AI capabilities into enterprise applications using Azure OpenAI. This includes building
        chatbot interfaces for data lookup, intent classification pipelines, constrained SQL generation from
        natural language, and retrieval-augmented generation over internal documentation.
    </p>

    <p>
        The key constraint in this work is trust. Enterprise users need to know when the AI is confident and
        when it is not. Every feature I build includes clear boundaries on what the AI can and cannot do,
        validation layers to catch errors before they reach users, and transparency about how answers were
        generated.
    </p>

    <h2>API Design and Third-Party Integrations</h2>

    <p>
        I design and build APIs that connect internal systems with external services — vendor platforms,
        payment processors, reporting tools, and other business applications. I focus on clear contracts,
        proper error handling, idempotency where needed, and documentation that other teams can actually use.
    </p>

    <p>
        Integration work is where reliability matters most. When an API call fails at 2 AM, the system
        needs to handle it gracefully — retry logic, dead letter queues, alerting, and clear logging
        so the on-call engineer can diagnose the issue quickly.
    </p>

    <h2>Data Pipelines and Analytics</h2>

    <p>
        In previous roles, I built data pipelines and analytics systems using ClickHouse and MongoDB. This
        included ingesting high-volume event data, building aggregation pipelines, and serving analytics
        dashboards that product teams relied on for decision-making.
    </p>

    <p>
        The challenge in analytics work is balancing query performance with data freshness. I learned to
        think carefully about materialized views, pre-aggregation strategies, and when to accept eventual
        consistency versus when real-time accuracy is required.
    </p>

    <h2>Migrating and Modernizing Legacy Systems</h2>

    <p>
        Some of the most valuable work I have done is unglamorous: migrating legacy systems to modern
        architectures without disrupting production. This involves understanding undocumented business
        logic, building migration scripts with rollback plans, running parallel systems during transition
        periods, and validating data integrity at every step.
    </p>

    <p>
        I approach modernization incrementally. Replace one component at a time. Keep the old system
        running until the new one is proven. Never do a big-bang rewrite unless there is truly no
        alternative.
    </p>
@endsection
