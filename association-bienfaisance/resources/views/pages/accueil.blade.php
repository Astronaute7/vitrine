@extends('layouts.app')

@section('title', 'Accueil - Association de Bienfaisance')
@section('meta_description', 'Association humanitaire dédiée à l\'aide aux plus démunis')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Ensemble, faisons la différence 
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            Rejoignez-nous dans notre mission d'aide aux personnes dans le besoin
        </p>
        <div class="space-x-4">
            <a href="{{ route('services') }}" class="bg-white text-red-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-block">
                Nos actions
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-red-600 transition inline-block">
                Nous rejoindre
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-red-600">{{ $stats['enfants_aides'] }}+</div>
                <div class="text-gray-600 mt-2">Enfants aidés</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-red-600">{{ $stats['repas_distribues'] }}+</div>
                <div class="text-gray-600 mt-2">Repas distribués</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-red-600">{{ $stats['benevoles'] }}+</div>
                <div class="text-gray-600 mt-2">Bénévoles actifs</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-red-600">{{ $stats['projets_realises'] }}+</div>
                <div class="text-gray-600 mt-2">Projets réalisés</div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Notre Mission</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Offrir une aide concrète et durable aux personnes vulnérables
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-5xl mb-4">🤝</div>
                <h3 class="text-xl font-bold mb-3">Solidarité</h3>
                <p class="text-gray-600">Lutter contre l'isolement et renforcer les liens sociaux</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-5xl mb-4">🎓</div>
                <h3 class="text-xl font-bold mb-3">Éducation</h3>
                <p class="text-gray-600">Donner accès à l'éducation pour tous les enfants</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-5xl mb-4">💚</div>
                <h3 class="text-xl font-bold mb-3">Bien-être</h3>
                <p class="text-gray-600">Améliorer les conditions de vie des plus démunis</p>
            </div>
        </div>
    </div>
</section>

<!-- Actualités -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Actualités</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($actualites as $actu)
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover-scale">
                <div class="p-6">
                    <div class="text-red-600 text-sm mb-2">{{ $actu['date'] }}</div>
                    <h3 class="text-xl font-bold mb-3">{{ $actu['titre'] }}</h3>
                    <p class="text-gray-600">{{ $actu['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="hero-gradient text-white py-16">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl font-bold mb-4">Devenez bénévole</h2>
        <p class="text-xl mb-8">Votre temps et vos compétences peuvent faire la différence</p>
        <a href="{{ route('contact') }}" class="bg-white text-red-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-block">
            Je m'engage
        </a>
    </div>
</section>
@endsection
