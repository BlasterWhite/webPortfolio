const projets = document.getElementsByClassName('projet');
const messageRienTrouve = document.getElementById('aucunProjet')

/**
 * Bar de Recherche 
 */ 
const Projet = {
    projet: String,
    titre: String,
    tags: String,
    visible: Boolean,
    
    recap: function() {
        console.log(`Le Titre est ${this.titre}, Tags : ${this.tags}, Visibilite : ${this.visible}`);
    },

    sprojet: function() {
        console.log(`${this.projet}`);
    }
};

let listProjet = [];

Object.values(projets).forEach(val => {
    const projetActuel = Object.create(Projet);
    projetActuel.projet = val;
    projetActuel.titre = val.children[0].innerHTML.toLowerCase();
    projetActuel.tags = val.children[1].textContent.toLowerCase();
    if(val.classList.contains("cache")) {
        projetActuel.visible = false;
    } else {
        projetActuel.visible = true;
    }
    //projetActuel.sprojet();
    listProjet.push(projetActuel);
    document.getElementById('nbProjet').innerHTML = `${listProjet.length} projets trouvés`;
});

//console.log(listProjet);


const rechercheInput = document.querySelector("[bar-recherche]");

rechercheInput.addEventListener('input', e => {
    const msg = e.target.value.toLowerCase();    
    const listProjetFiltre = listProjet.filter( p => {
        if(p.titre.includes(msg) || p.tags.includes(msg)) {
            p.visible = true;
            p.projet.classList.remove('cache');
            return p;
        } else {
            p.visible = false;
            p.projet.classList.add('cache');
        }
    });

    if(listProjetFiltre.length > 1) {
        document.getElementById('nbProjet').innerHTML = `${listProjetFiltre.length} projets trouvés`;
    } else {
        document.getElementById('nbProjet').innerHTML = `${listProjetFiltre.length} projets trouvé`;
    }
    
    if(listProjetFiltre.length == 0) {
        messageRienTrouve.classList.remove('cache');
    } else {
        messageRienTrouve.classList.add('cache');
    }
});

/*
    Affiche un message si rien a été trouvé
*/
