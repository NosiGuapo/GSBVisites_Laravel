/* Pré-sélection des éléments requis */
const champRecherche = document.querySelector('.doctor-input');
const inputRecherche = champRecherche.querySelector("input");
const suggestions = champRecherche.querySelector('.autocom-box');

/* Si l'utilisateur entre un charactère dans le champ */
inputRecherche.onkeyup = (x)=>{
    // console.log(x.target.value);
    let inputValue = x.target.value; /* Valeur contenue dans le champ de recherche */
    let valueArray = [];
    if (inputValue){
        valueArray = doctorPossibilities.filter((contenu) =>{
            /*
            * Filtre des valeurs en fonction de la valeur entrée par l'utilisateur
            * Les valeurs sont converties en minuscule, ce qui ne posera pas de problème avec le controleur car la requête SQL de vérification convertis déjà la valeur passée en minuscules
            * On ne garde que les options qui commencent par les mêmes caractères que ceux entrés
            */
            return contenu.toLocaleLowerCase().startsWith(inputValue.toLocaleLowerCase());
        });
        valueArray = valueArray.map((contenu)=>{
            /* Les propositions seront contenues dans des balises <li>, afin que l'affichage sur la page s'effectue correctement */
            return contenu = '<li>'+contenu+'</li>';
        });
        /* Le champ contient des valeurs, le visiteur effectue une recherche: On affiche la partie des suggestions */
        suggestions.classList.add('active');
        /* Si une modification dans le champs est effectuée, on appelle la fonction qui permettra l'affichage des nouvelles valeurs en intégrant ces dernières dans le code HTML */
        afficherSuggestions(valueArray);
        /* On sélectionne toutes les options une fois la fonction effectuée, afin de leur attribuer une propriété précise */
        let allSuggestions = suggestions.querySelectorAll("li");
        for (let i = 0; i < allSuggestions.length; i++){
            /* On rend chaque valeur cliquable, afin que le visiteur puisse en récupérer la valeur plus rapidement */
            allSuggestions[i].setAttribute("onclick", 'selectValue(this)');
        }
    } else {
        /* Le champ ne contient rien, le visiteur n'effectue aucune recherche: On cache la partie des suggestions */
        suggestions.classList.remove('active');
    }
}

function afficherSuggestions(laListe){
    let listeValeurs;
    if (!laListe.length){
        /* Si aucun résultat ne correspond, on n'affiche rien */
        suggestions.classList.remove('active');
    } else {
        listeValeurs = laListe.join('');
    }
    /* La liste contenant l'ensemble des médecins correspondant à la recherche seront inclus dans la div HTML correspondante */
    suggestions.innerHTML = listeValeurs;
}

function selectValue(element){
    /* On remplace le contenu du champ par la valeur sur laquelle le visiteur a cliqué */
    inputRecherche.value = element.textContent;
    /* Une fois la valeure passée au champ, on cache les autres résultats */
    suggestions.classList.remove('active');
}