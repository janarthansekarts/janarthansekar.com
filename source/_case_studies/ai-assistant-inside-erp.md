---
extends: _layouts.case_study
title: "Building an AI Assistant Inside an ERP System Responsibly"
date: 2026-03-28
description: "How we added an AI-powered assistant to an enterprise ERP platform with strict accuracy and trust constraints."
section: content
---

## Summary

We added an AI-powered assistant to an enterprise ERP platform to help users query data, understand workflows, and get contextual answers — without creating a system that hallucinates business-critical information.

## Context

The ERP system serves teams managing product lifecycle data — parts, assemblies, change orders, supplier records. Users frequently need to look up information scattered across modules: "What parts are affected by this engineering change?" or "Show me all open purchase orders for this supplier."

These queries are not hard to answer programmatically, but they require users to know which module to open, which filters to set, and how the data model connects. New users struggled. Experienced users found it tedious.

The business wanted a chat-style assistant that could answer these questions in natural language.

## Constraints

- **Accuracy is non-negotiable.** A wrong answer in an ERP system can lead to bad purchasing decisions, incorrect manufacturing instructions, or compliance issues. We could not afford confident-sounding hallucinations.
- **The data is private and domain-specific.** General-purpose LLMs know nothing about our schema, business rules, or terminology. We could not just point GPT at a database.
- **Users are not technical.** The assistant had to work in plain language, not SQL or API syntax.
- **Infrastructure was fixed.** We were on Azure. The AI layer had to use Azure OpenAI. No external API calls to third-party AI services.
- **The team was small.** Two engineers (myself included) built and maintained the entire feature.

## Approach

We broke the problem into layers:

**Intent classification.** Every user message first goes through an intent classifier. We defined a fixed set of supported intents — data lookup, workflow status, definition questions, and general help. Anything that does not match a known intent gets a polite "I cannot help with that" response. This was the most important design decision. It set the boundary of what the assistant could do, which set the boundary of what it could get wrong.

**Scoped SQL generation.** For data lookup intents, we built a constrained SQL generation layer. The LLM receives a stripped-down schema (only the tables and columns relevant to the classified intent), a set of rules about joins and filters, and the user's question. It generates a SQL query. That query runs through a validation layer before execution — no write operations, no unrestricted joins, no access to tables outside the allowed set.

**Domain-grounded responses.** For definition and workflow questions, we used retrieval-augmented generation (RAG) over internal documentation. The LLM answers based on retrieved chunks, not its own training data. Every response includes a source reference so the user can verify.

**Fallback and transparency.** When the system is uncertain (low intent confidence, SQL validation failure, no relevant documents found), it says so. We never let it guess. The assistant says "I'm not confident in this answer" or "I could not find relevant information" rather than fabricating a response.

## Outcome

The assistant shipped to production and is used daily by operations and engineering teams. It handles roughly 70% of incoming queries without requiring users to navigate to the correct module manually. The remaining 30% are either out-of-scope (correctly rejected) or edge cases we are progressively adding support for.

There have been zero incidents caused by incorrect AI-generated answers in production. That number matters more to me than the 70% success rate.

## Lessons

- **Defining what the system should NOT do was more valuable than defining what it should do.** The intent boundary kept us honest.
- **SQL generation is powerful but must be caged.** Unrestricted natural-language-to-SQL is a liability in enterprise contexts. Schema scoping and query validation are not optional.
- **Users trust the assistant more because it sometimes says "I don't know."** Counterintuitively, refusal increased adoption. Users learned they could trust the answers it did give.
- **RAG quality depends entirely on document quality.** We spent as much time cleaning and structuring internal docs as we did building the retrieval pipeline. That was the right call.
- **Start narrow, expand slowly.** We launched with 8 supported intents. We now support 20+. Each one was added only after we could validate its accuracy. No feature flags, no beta labels — if it ships, it works.
