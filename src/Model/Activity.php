<?php

namespace App\Model;

class Activity{
    
    public function getActivity(){

    return [
        [
            'name' => 'Parc Asterix',
            'description' => 'Pour votre sortie première rencontre le parc asterix peut être un bon choix si vous aimez les sensations fortes et l\'amusement',
            'image' => 'asterixparc.jpg',
        ],
        [
            'name' => 'DisneyLand',
            'description' => 'Pour réussir votre première rencontre ou faire découvrir à votre futur(e) 
            votre univers et partager un moment à 2 après votre première rencontre
            choisisez DISNEY-LAND',
            'image' => 'disneyparc.jpg',
        ],
        [
            'name' => 'spa',
            'description' => 'Vous avez déjà rencontré ou c\'est la deuxième rencontre ? et vous êtes plutôt sur de votre future vie de couple, 
            c\'est le moment de l\'intimité avec un SPA!',
            'image' => 'spa.jpg',
        ],
    ];
    } 
     
}