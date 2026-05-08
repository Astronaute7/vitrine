@extends('layouts.app')

@section('title', 'Contact - Association de Bienfaisance')
@section('meta_description', 'Contactez-nous pour nous rejoindre, faire un don ou proposer votre aide')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-blue-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contactez-nous</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Une question ? Une proposition ? N'hésitez pas à nous écrire
        </p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded">
                <p class="font-semibold">✓ {{ session('success') }}</p>
            </div>
        @endif

	@if(session('error'))
	    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded">
		<p class="font-semibold">⚠️ {{ session('error') }}</p>
	    </div>
	@endif

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Informations de contact -->
            <div>
                <h2 class="text-2xl font-bold mb-6">Informations</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-map-marker-alt text-red-600 text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-lg">Adresse</h3>
                            <p class="text-gray-600">123 Rue des Chamerops <br>Lome, Adewii TOGO</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-phone text-red-600 text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-lg">Téléphone</h3>
                            <p class="text-gray-600">+228 98 91 48 95</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-envelope text-red-600 text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-lg">Email</h3>
                            <p class="text-gray-600">association@email.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-clock text-red-600 text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-lg">Horaires</h3>
                            <p class="text-gray-600">Lundi - Vendredi : 9h - 18h<br>Samedi : 10h - 16h</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 p-6 bg-red-50 rounded-lg">
                    <h3 class="font-bold text-lg mb-2">Besoin d'aide immédiate ?</h3>
                    <p class="text-gray-700">Notre ligne d'écoute est disponible 24h/24 et 6j/7</p>
                    <p class="text-2xl font-bold text-red-600 mt-3">00228 98 91 48 95</p>
                    <p class="text-sm text-gray-500 mt-2">Appel gratuit</p>
                </div>
            </div>
            
            <!-- Formulaire de contact -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6">Envoyez-nous un message</h2>
                
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Nom complet *</label>
                        <input type="text" name="nom" value="{{ old('nom') }}" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-600 @error('nom') border-red-500 @enderror"
                               placeholder="votre nom" required>
                        @error('nom') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-600 @error('email') border-red-500 @enderror"
                               placeholder="votre email" required>
                        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Téléphone *</label>
                        <input type="tel" name="telephone" value="{{ old('telephone') }}" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-600 @error('telephone') border-red-500 @enderror"
                               placeholder="votre numero" required>
                        @error('telephone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                        <textarea name="message" rows="6" 
                                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-600 @error('message') border-red-500 @enderror"
                                  placeholder="Écrivez votre demande..." required>{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
