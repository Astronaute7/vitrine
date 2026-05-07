@extends('layouts.app')

@section('title', 'Nos Actions - Association de Bienfaisance')
@section('meta_description', 'Découvrez nos actions humanitaires : aide alimentaire, soutien scolaire, aide médicale et plus')

@section('content')
<section class="bg-gradient-to-r from-red-600 to-red-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Nos Actions</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Des actions concrètes pour aider ceux qui en ont le plus besoin
        </p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                <div class="p-6">
                    <div class="text-6xl mb-4 text-center">{{ $service['icone'] }}</div>
                    <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">{{ $service['titre'] }}</h3>
                    <p class="text-gray-600 text-center mb-4">{{ $service['description'] }}</p>
                    <div class="border-t pt-4 mt-4">
                        <p class="text-gray-700 text-sm">{{ $service['details'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section Bénévolat -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-red-50 rounded-2xl p-8 md:p-12">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">Vous voulez nous aider ?</h2>
                <p class="text-xl text-gray-700 mb-6">
                    Rejoignez notre équipe de bénévoles et participez à nos actions
                </p>
                <a href="{{ route('contact') }}" class="bg-red-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-red-700 transition inline-block">
                    Devenir bénévole
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
