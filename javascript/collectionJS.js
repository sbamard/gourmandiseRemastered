function displayProject() {
    let projectsType = document.getElementsByName('projects-type');
    let all = document.getElementsByClassName("all");
    let collection1 = document.getElementsByClassName("collection1");
    let collection2 = document.getElementsByClassName("collection2");
    let collection3 = document.getElementsByClassName("collection3");
    for (let i = 0; i < projectsType.length; i++) {
        //Récupère chaque élément HTML un par un
        let projectType = projectsType[i];
        //Vérifie s'il est sélectionné
        if (projectType.checked) {
            
            
            /*TODO : test sur projectType.value*/
            if (projectType.value === "collection1") {
                //hide all
                for (let a = 0; a < all.length; a++) {
                    all[a].style.display = 'none';
                }
                //display only collection1 
                for (let a = 0; a < collection1.length; a++) {
                    collection1[a].style.display = 'block';
                }}
            
            else if (projectType.value === "collection2") {
                for (let a = 0; a < all.length; a++) {
                    all[a].style.display = 'none';
                }
                //display only collection2 
                for (let c = 0; c < collection2.length; c++) {
                    collection2[c].style.display = 'block';
                }}
            else if (projectType.value === "collection3") {
                for (let a = 0; a < all.length; a++) {
                    all[a].style.display = 'none';
                }
                //display only collection3 
                for (let c = 0; c < collection3.length; c++) {
                    collection3[c].style.display = 'block';
                }}
            
        }
    }
}