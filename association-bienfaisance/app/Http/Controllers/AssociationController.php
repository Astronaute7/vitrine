<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class AssociationController extends Controller
{
    // Page Accueil
    public function accueil()
    {
        $actualites = [
            ['titre' => 'Grande collecte alimentaire', 'date' => '15 Mars 2025', 'description' => 'Collecte organisée dans toute la ville'],
            ['titre' => 'Marathon solidaire', 'date' => '5 Avril 2025', 'description' => 'Course au profit des enfants défavorisés'],
            ['titre' => 'Gala de bienfaisance', 'date' => '20 Mai 2025', 'description' => 'Soirée de collecte de fonds'],
        ];
        
        $stats = [
            'enfants_aides' => 1250,
            'repas_distribues' => 45000,
            'benevoles' => 180,
            'projets_realises' => 45
        ];
        
        return view('pages.accueil', compact('actualites', 'stats'));
    }
    
    // Page Services (actions de l'association)
    public function services()
    {
        $services = [
            [
                'titre' => 'Aide Alimentaire',
                'icone' => '🍲',
                'description' => 'Distribution de repas et colis alimentaires aux familles dans le besoin',
                'details' => 'Notre association distribue chaque semaine plus de 500 repas chauds et 200 colis alimentaires.',
                'image' => 'aide-alimentaire.jpg'
            ],
            [
                'titre' => 'Soutien Scolaire',
                'icone' => '📚',
                'description' => 'Accompagnement éducatif pour les enfants défavorisés',
                'details' => 'Des bénévoles qualifiés aident les enfants dans leurs devoirs et organisent des ateliers pédagogiques.',
                'image' => 'soutien-scolaire.jpg'
            ],
            [
                'titre' => 'Aide Médicale',
                'icone' => '🏥',
                'description' => 'Accès aux soins pour les personnes sans couverture médicale',
                'details' => 'Permanences médicales gratuites et aide à l\'achat de médicaments.',
                'image' => 'aide-medicale.jpg'
            ],
            [
                'titre' => 'Insertion Professionnelle',
                'icone' => '💼',
                'description' => 'Accompagnement vers l\'emploi et la formation',
                'details' => 'Ateliers CV, simulations d\'entretien et mise en relation avec des employeurs partenaires.',
                'image' => 'insertion.jpg'
            ],
            [
                'titre' => 'Aide aux Seniors',
                'icone' => '👵',
                'description' => 'Visites et accompagnement des personnes âgées isolées',
                'details' => 'Visites à domicile, aide administrative et sorties collectives.',
                'image' => 'seniors.jpg'
            ],
            [
                'titre' => 'Actions Environnementales',
                'icone' => '🌍',
                'description' => 'Sensibilisation et actions pour l\'environnement',
                'details' => 'Nettoyage des espaces publics, ateliers de recyclage, jardinage solidaire.',
                'image' => 'environnement.jpg'
            ]
        ];
        
        return view('pages.services', compact('services'));
    }
    
    // Page Réalisations
    public function realisations()
    {
        $realisations = [
            [
                'titre' => 'Cantine Solidaire',
                'description' => 'Ouverture d\'une cantine gratuite pour les sans-abris',
                'impact' => 'Plus de 10 000 repas servis en 2024',
                'image' => 'cantine.jpg',
                'date' => 'Janvier 2024',
                'chiffre' => '10 000+',
                'unite' => 'repas'
            ],
            [
                'titre' => 'Bibliothèque它inérante',
                'description' => 'Création d\'une bibliothèque ambulante pour les enfants des quartiers défavorisés',
                'impact' => '+500 enfants touchés par l\'initiative',
                'image' => 'bibliotheque.jpg',
                'date' => 'Mars 2024',
                'chiffre' => '500+',
                'unite' => 'enfants'
            ],
            [
                'titre' => 'Campagne Vaccination',
                'description' => 'Campagne de vaccination gratuite dans les villages reculés',
                'impact' => '1 200 personnes vaccinées contre la grippe',
                'image' => 'vaccination.jpg',
                'date' => 'Octobre 2024',
                'chiffre' => '1 200',
                'unite' => 'vaccinations'
            ],
            [
                'titre' => 'Jardin Partagé',
                'description' => 'Création d\'un jardin collaboratif en centre-ville',
                'impact' => 'Production de 500 kg de légumes bio pour les familles',
                'image' => 'jardin.jpg',
                'date' => 'Mai 2024',
                'chiffre' => '500 kg',
                'unite' => 'légumes bio'
            ],
            [
                'titre' => 'Formation Numérique',
                'description' => 'Ateliers informatiques pour seniors',
                'impact' => '150 seniors formés aux outils numériques',
                'image' => 'numerique.jpg',
                'date' => 'Septembre 2024',
                'chiffre' => '150',
                'unite' => 'seniors formés'
            ],
            [
                'titre' => 'Collecte de Fonds',
                'description' => 'Gala annuel de bienfaisance',
                'impact' => '25 000€ récoltés pour les actions 2025',
                'image' => 'gala.jpg',
                'date' => 'Décembre 2024',
                'chiffre' => '25 000€',
                'unite' => 'collectés'
            ]
        ];
        
        return view('pages.realisations', compact('realisations'));
    }
    
    // Page Contact avec envoi d'email
    public function contact()
    {
        return view('pages.contact');
    }
    
    public function sendContact(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string|min:10|max:5000'
        ]);
        
        // Envoyer l'email
        Mail::to('association@bienfaisance.org')->send(new ContactMail($validated));
        
        // Rediriger avec message de succès
        return redirect()->route('contact')
                         ->with('success', 'Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
    }
}
