---
layout   : default
permalink: define/requirements/backoffice/
# Custom Page Variables
# ─────────────────────
title: Backoffice
---

Functional Requirements
-----------------------

**Rollen:**
- Een niet-aangemelde gebruiker is een bezoeker.
- Een aangemelde gebruiker kan hoofdbeheerder zijn.
- Een aangemelde gebruiker kan beheerder zijn.

**Authenticatie van beheerders:**
- De bezoeker die (hoofd)beheerder is kan zich aanmelden.
- De bezoeker die geen (hoofd)beheerder is kan zich niet aanmelden.
- De aangemelde (hoofd)beheerder kan zich afmelden.

**Beheer van beheerders:**
- De eerste beheerder is automatisch een hoofdbeheerder.
- De hoofdbeheerder kan een nieuwe beheerder toevoegen (create).
- De hoofdbeheerder kan een beheerder activeren (update).
- De hoofdbeheerder kan een beheerder deactiveren (soft delete).
- De hoofdbeheerder kan een beheerder verwijderen (hard delete).
- De hoofdbeheerder kan de gegevens van een beheerder aanpassen (update).
- De hoofdbeheerder kan een beheerder een hoofdbeheerder maken (update).
- De hoofdbeheerder kan een hoofdbeheerder een beheerder maken (update).
- De (hoofd)beheerder kan de eigen gegevens wijzigen (update]).

**Beheer van klanten:**
- De (hoofd)beheerder kan een nieuwe klant toevoegen (create).
- De (hoofd)beheerder kan een klant activeren (update).
- De (hoofd)beheerder kan een klant deactiveren (soft delete).
- De (hoofd)beheerder kan de gegevens van een klant wijzigen (update).

**Beheer van product-/dienstcategorieën:**
- De hoofdbeheerder kan een nieuw(e) categorie toevoegen (create).
- De hoofdbeheerder kan een categorie verwijderen (hard delete).
- De hoofdbeheerder kan de details van een categorie wijzigen (update).
- De (hoofd)beheerder kan een nieuw(e) subcategorie toevoegen (create).
- De (hoofd)beheerder kan een subcategorie verwijderen (hard delete).
- De (hoofd)beheerder kan de details van een subcategorie wijzigen (update).

**Beheer van producten/diensten:**
- De (hoofd)beheerder kan een nieuw(e) product/dienst toevoegen (create).
- De (hoofd)beheerder kan een product/dienst verwijderen (soft delete).
- De (hoofd)beheerder kan de gegevens van een product/dienst wijzigen (update).

**Metrics:**
- De (hoofd)beheerder kan gedetailleerde statistieken zien over klanten.
- De (hoofd)beheerder kan gedetailleerde statistieken zien over producten/diensten.

Non-Functional Requirements
---------------------------

**Beveiligingseisen**
- De app is afgeschermd voor niet-bevoegden.
- De app voldoet aan de normale eisen voor beveiliging.

**UX-eisen**
- De app is gebruiksvriendelijk.
- De app is geoptimaliseerd om vlot te werken.
- De app straalt professionele geloofwaardigheid uit.
- De IA en IxD van de app is logisch opgebouwd.
- De vormgeving van de app is esthetisch verantwoord.