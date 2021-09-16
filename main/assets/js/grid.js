class Grid {                                                                    //Creation de mon obj 

    constructor(data) {                                                 // creation du constructeur (méthode utilisée pour créer/initialiser un objet      
    
                                                                                    
        //console.dir(data);

        let html = "";                                                          //Let crée vide

        for (const el of data) {                                                // Boucle 
            console.dir(el);                                                    // Affiche liste interactive des propriétés de l'objet
            html += `                                                           
            <div class="gallery-item containerimg">
                <a href="`+el[2]+`">
                <img class="gallery-image" src="`+el[1]+`" ></a>
                <div class="centered">`+el[0]+`</div>
            </div>
            `;                                                                  // Creation grid de HTML
        }

        console.log("html="+html);
        $(".gallery").html(html);

    }

        //  empty() {                                                               //Posibiliter de vider la grid 
        //  $(".gallery").empty();
        // }

}