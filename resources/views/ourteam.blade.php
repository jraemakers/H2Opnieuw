@extends('layouts.app')

@section('head')
    <title>H2Opnieuw | Our team</title>
    <meta name="title" content="H2Opnieuw | Our team" />
    <meta name="description" content="Get to know our team. H2Opnieuws consists of 5 driven and hardworking people with the aim to save the world." />
    <meta property="og:title" content="H2Opnieuw | Our team" />
    <meta property="og:description" content="Get to know our team. H2Opnieuws consists of 5 driven and hardworking people with the aim to save the world." />
@endsection

@section('main')
    <div class="mx-auto container">
        <h1 class="text-center my-8">Our team</h1>
        <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mx-8 mb-8">
            <div class="lg:col-span-3 w-full my-auto lg:mb-auto pb-4 px-4">
                <h2>Julian Humblet</h2>
                <h3 class="mb-4">Infrastructure</h3>
                Hallo, ik ben Julian en ik ben 19 jaar oud. Dit schooljaar (2022-2023) ben ik begonnen aan de opleiding
                HBO-ICT aan Fontys Hogescholen in Eindhoven. Mijn vorige studie heb ik gevolgd aan Het Vista College te
                Sittard. Hier heb ik mijn ICT-Beheerder Niveau 4 (MBO) diploma behaald. Deze opleiding vond ik erg
                interessant, daardoor ben ik erg geïnteresseerd in de studierichtingen ICT & Infrastructure en ICT & Cyber
                Security.
                In mijn vrije tijd vind ik het leuk om naar de sportschool te gaan en Formule 1, Netflix en YouTube te
                kijken. Daarnaast werk ik bij de Jumbo als medewerker service. Ook houd ik van reizen. Zelf ben ik al op
                verschillende plekken geweest, zoals New York, Turkije, Mallorca, Kreta, Kos en Oostenrijk.
            </div>
            <div class="mx-auto">
                <img src="{{ Vite::asset('resources/images/julian-min.png') }}" class=" h-96" alt="Julian Humblet">
            </div>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mx-8 mb-4">
            <div class="mx-auto hidden lg:flex">
                <img src="{{ Vite::asset('resources/images/joost-min.png') }}" class=" h-96" alt="Joost Raemakers">
            </div>
            <div class="lg:col-span-3 w-full my-auto lg:mb-auto pb-4 px-4">
                <h2>Joost Raemakers</h2>
                <h3 class="mb-4">Software</h3>
                Mijn naam is Joost Raemakers, 20 jaar oud en ik kom uit Gronsveld. Ik heb voor Fontys Hogeschool ICT mijn MBO Software Developer afrond. Ik heb hier vooral gewerkt met PHP en een beetje C#. Op mijn stage heb ik een jaar lang gewerkt met Laravel en in mijn vrije tijd programeer ik regelmatig met JavaScript. Ik wil me graag verdiepen in herbruikbare software schrijven. Ik hoop dat ik over 5 jaar nog steeds met veel plezier aan het programmeren ben.
            </div>
            <div class="mx-auto lg:hidden">
                <img src="{{ Vite::asset('resources/images/joost-min.png') }}" class=" h-96" alt="Joost Raemakers">
            </div>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mx-8 mb-8">
            <div class="lg:col-span-3 w-full my-auto lg:mb-auto pb-4 px-4">
                <h2>Jonathan Kat</h2>
                <h3 class="mb-4">Technology</h3>
                Ik ben Jonathan Kat, ik ben 17 Jaar oud en geboren in Groningen. Voordat ik op het FHICT zat ik op het Cambium College in Zaltbommel, ik deed daar Havo met een N&T profiel met onder andere vakken zoals Informatica, Aardrijkskunde, Natuurkunde en Scheikunde. 
                Ik heb gekozen voor Fontys Hogeschool ICT omdat een vriend van mij deze aan mij liet zien en toen ik hier ging kijken vond ik het geweldig. In het startsemester zou ik willen leren over voornamelijk Software Engineering omdat ik hier heel erg geïnteresseerd in ben, maar ook professionele ontwikkeling op het gebied van samenwerken en het goed documenteren van alles wat er wordt gedaan.  
                Over 5 jaar weet ik nog niet zeker waar ik wil zijn of waar ik mijzelf zie. Ik doe de ICT-opleiding omdat ik erin geïnteresseerd ben, maar ik wil ook een richting in van hulpverlening. Onder hulpverlening zie ik alles van Politie, Ambulance, Brandweer en in die richting. Ik ben altijd al geïnteresseerd met Bussen en Treinen en ik zat te denken om bij Veiligheid en Service van NS zou willen werken, V&S is een soort BOA op het station. Maar ik kan mijzelf ook wel zien bij de brandweer of Ambulance. Als ik over 5 jaar niet meer geïnteresseerd ben in hulpverlening zit ik ergens in ICT, hoogstwaarschijnlijk “gamedev”.
            </div>
            <div class="mx-auto">
                <img src="{{ Vite::asset('resources/images/jonathan-min.png') }}" class=" h-96" alt="Jonathan Kat">
            </div>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mx-8 mb-4">
            <div class="mx-auto hidden lg:flex">
                <img src="{{ Vite::asset('resources/images/stijn-min.png') }}" class=" h-96" alt="Stijn van den Hurk">
            </div>
            <div class="lg:col-span-3 w-full my-auto lg:mb-auto pb-4 px-4">
                <h2>Stijn van den Hurk</h2>
                <h3 class="mb-4">Business</h3>
                Hoihoi, ik ben Stijn, 18 jaar en woon in Helmond.  
                Al sinds voordat ik naar de middelbare school ging ben ik geïnteresseerd in computers en alles wat je er mee kan, dit is wat mij uiteindelijk heeft geleid tot de opleiding HBO ICT op de Fontys nadat ik mijn havo-opleiding had afgerond. 
                Mijn specifieke interesses binnen de ICT liggen met name bij het programmeren van software. De studierichting ICT & Software ook meteen mijn aandacht. Ik hoop namelijk dat deze studierichting mij meer kan leren over het 'netjes' schrijven van code, zodat ik uiteindelijk door kan naar de game development industrie. Werken in de game industrie is dan ook waar ik hoop te zijn over 5 jaar, in ieder geval software development. Verder hoop ik meer te leren over het samenwerken tussen de verschillende ICT richtingen.
            </div>
            <div class="mx-auto lg:hidden">
                <img src="{{ Vite::asset('resources/images/stijn-min.png') }}" class=" h-96" alt="Stijn van den Hurk">
            </div>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mx-8 mb-8">
            <div class="lg:col-span-3 w-full my-auto lg:mb-auto pb-4 px-4">
                <h2>Tony Hu</h2>
                <h3 class="mb-4">Media</h3>
                Mijn naam is Tony en ik ben 18 jaar oud. Ik woon in Eindhoven in het centrum.
                Gitaar spelen en poolen zijn mijn grootste hobby's. Ik ben dit jaar begonnen met hbo-ICT bij Fontys. Bij
                mijn vorige studie heb ik havo bij het Sint Joris college gedaan. Voor mijn profielwerkstuk heb ik meegedaan
                aan fhict. Ik vond dit leuk en besloot daarom hbo-ICT bij Fontys te doen. Ook was ik al geïnteresseerd in
                programmeren. Ik vind deze studie zeer leuk en heb geen spijt van mijn keuze. Dit startsemester wil ik leren
                om beter te kunnen coderen. Op het gebied van professionele ontwikkeling wil ik leren om beter te leren
                samen werken en documenteren. Ik wil vooral mijn kennis over ICT in algemeen uitbreiden op alle 5 gebieden.
                Over 5 jaar wil ik afgestudeerd zijn. Ik wil gaan werken in de ICT.
            </div>
            <div class="mx-auto">
                <img src="{{ Vite::asset('resources/images/tony-min.png') }}" class=" h-96" alt="Tony Hu">
            </div>
        </div>
    </div>
@endsection
