---
extends: _layouts.post
title: "Using AI Inside ERP Systems Without Breaking Trust"
date: 2026-03-28
description: "What I have learned about applying AI to enterprise workflows where accuracy and trust are non-negotiable."
section: content
---

Enterprise software runs on trust. Users trust that the numbers on screen are accurate. Managers trust that workflows enforce the correct approvals. Finance trusts that the system will not let someone create a purchase order that violates policy. Every feature in an ERP system is implicitly a promise: this will behave correctly, every time.

AI, by its nature, does not make that promise. Language models are probabilistic. They are confidently wrong at a non-trivial rate. They do not know your business rules. They have no concept of "this answer could cost the company $50,000 if it is wrong." And yet, there is genuine value in applying AI to enterprise workflows — if you do it carefully.

I have spent the past year integrating Azure OpenAI into an ERP platform. Here is what I have learned about doing it without eroding the trust that enterprise software depends on.

**Scope relentlessly.** The single most important decision is what the AI is NOT allowed to do. Before writing any code, I define the boundary. What intents are supported? What data can it access? What actions can it trigger? Everything outside that boundary gets a clear refusal. Users should never encounter a hallucinated answer to a question the system was not designed to handle.

**Never let AI write to the database without human confirmation.** Read operations are recoverable — a wrong answer can be corrected. Write operations are not. If the AI suggests creating a record, modifying a workflow, or triggering a process, that suggestion must go through a confirmation step. "Here is what I would do — do you want to proceed?" This is not a UX nicety. It is a safety mechanism.

**Show your work.** When the AI returns an answer, show where it came from. If it queried a table, show the query. If it retrieved a document, link to the source. If it inferred something, say so. Transparency does not slow users down — it gives them a reason to trust the answer, and a way to catch errors.

**Design for the wrong answer.** Every AI feature I build, I start by asking: "What happens when this is wrong?" If the consequences are low (a search result is slightly off), I am comfortable with probabilistic behavior. If the consequences are high (a cost calculation, a compliance check), I either avoid AI entirely or add deterministic validation around it.

**Measure trust, not just accuracy.** Accuracy metrics matter, but in enterprise software, the real metric is: do users trust it enough to use it? I track adoption rates, fallback rates (how often users override or ignore the AI suggestion), and support tickets related to AI answers. A feature with 90% accuracy that nobody trusts is worse than a feature with 80% accuracy that users rely on.

AI in enterprise software is not about being cutting-edge. It is about finding the places where probabilistic assistance genuinely reduces friction, and building enough guardrails that users can rely on it without second-guessing their own system. That is a narrower ambition than the AI hype cycle suggests. It is also a more honest one.
