function ajouterInput() {
    /* L'opération d'ajout de champs n'est possible que si la limite est strictement supérieure au nombre actuel */
    if (compteur < maxCompteur) {
        /* Augmenter le compteur à chaque création d'inputs */
        compteur += 1;
        let beginPoint = document.getElementById("newInputsBeginPoint");
        let elementRow = document.createElement("div");

        let fixQuantite = document.createElement("div");
        let fixDrug = document.createElement("div");

        let fixRemoveButton = document.createElement("div");
        let removeButton = document.createElement("button");
        let removeIcon = document.createElement("i");

        let drugSelect = document.createElement("select");
        let quantiteInput = document.createElement("input");
        /* elementRow div */
        elementRow.setAttribute('class', 'offrir-inputs flex flex-1 flex-row');
        elementRow.setAttribute('id', 'op-' + compteur);
        beginPoint.appendChild(elementRow);

        /* fixDrug div */
        fixDrug.setAttribute('class', 'alignfix');
        elementRow.appendChild(fixDrug);

        /* fixQuantite div */
        fixQuantite.setAttribute('class', 'pl-5 input-login mb-6');
        fixQuantite.setAttribute('id', 'medicAmount');
        elementRow.appendChild(fixQuantite);

        /* Médicament Select */
        drugSelect.setAttribute('name', 'drug[' + compteur + ']');
        drugSelect.setAttribute('class', 'border border-gray-400 p-2 w-full mb-7 outline-none');
        fixDrug.appendChild(drugSelect);

        /* removeRow div */
        fixRemoveButton.setAttribute('id', 'removeRow');
        fixRemoveButton.setAttribute('class', 'ml-2 text-white font-bold');
        elementRow.appendChild(fixRemoveButton);

        /* Boutton de suppression de ligne */
        removeButton.setAttribute('class', 'bg-red-500 rounded text-left outline-none hover:bg-red-600 duration-300');
        removeButton.setAttribute('id', 'remove-'+compteur);
        removeButton.setAttribute('type', 'button');
        removeButton.setAttribute('onclick', 'supprimerVisite(' + compteur + ')');
        fixRemoveButton.appendChild(removeButton);

        /* Icône du boutton de suppression */
        removeIcon.setAttribute('class', 'far fa-times p-3');
        removeButton.appendChild(removeIcon);

        //
        // alert(medicamentMap);
        // console.log(medicamentMap[1]);

        for (var i = 0; i < maxMedicCompteur; i++) {
            const opt = document.createElement('option');

            /* Valeur de l'option (id du médicament) */
            opt.value = medicId[i];
            /* Texte affiché (nom du médicament) */
            opt.innerHTML = medicName[i];
            drugSelect.appendChild(opt);
        }

        /* Quantité input */
        quantiteInput.setAttribute('type', 'text');
        quantiteInput.setAttribute('name', 'amount[' + compteur + ']');
        quantiteInput.setAttribute('class', 'border border-gray-400 p-2 w-full outline-none');
        quantiteInput.setAttribute('placeholder', '');
        fixQuantite.appendChild(quantiteInput);
    } else {
        var errormsg = document.getElementById("msg-alert");
        errormsg.classList.remove('hidden');
    }
}

function supprimerVisite(numColonne) {
    /* On prend l'élément par l'id, puis par son numéro précis */
    var removeCateg = document.getElementById('op-' + numColonne);
    /* Permet une séléction de plusieurs éléments à partir du début de leur Id html */
    var allCategs = document.querySelectorAll('[id^="op-"]');
    /* Il est important de sélectionner les bouttons de suppression, leur valeur allant également être décrémentée lors de la suppression d'un champs inférieur à eux */
    var allRemoveButtons = document.querySelectorAll('[id^="remove-"]');
    var errormsg = document.getElementById("msg-alert");

    errormsg.classList.add('hidden');
    removeCateg.remove();
    /* Une entrée est supprimée, on décrémente le compteur */
    compteur -= 1;
    const regex = /[0-9]/;
    for (var i = 0; i < maxCompteur; i++) {
        /* Récupérer sa valeur depuis l'id */
        var categId = allCategs[i].id;

        /* Décrémenter la valeur de 1 pour chaque entrée supérieure à celle supprimée, ainsi que pour leur bouton de suppression */
        if (categId.match(regex) > numColonne) {
            allCategs[i].setAttribute('id', 'op-'+(categId.match(regex) - 1));
            /* Pour le boutton, on modifie à la fois la valeur passée à la fonction Js, et son id */
            allRemoveButtons[i].setAttribute('id', 'remove-'+(categId.match(regex) - 1));
            allRemoveButtons[i].setAttribute('onclick', 'supprimerVisite('+(categId.match(regex) - 1)+')');
        }
    }
}