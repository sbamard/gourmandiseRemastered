function displayProject() {
    let projectsType = document.getElementsByName('projects-type');
    let all = document.getElementsByClassName("all");
    let vitrine = document.getElementsByClassName("vitrine");
    let commerce = document.getElementsByClassName("commerce");
    for (let i = 0; i < projectsType.length; i++) {
        //Récupère chaque élément HTML un par un
        let projectType = projectsType[i];
        //Vérifie s'il est sélectionné
        if (projectType.checked) {
            
            
            /*TODO : test sur projectType.value*/
            if (projectType.value === "vitrine") {
                //hide all
                for (let a = 0; a < all.length; a++) {
                    all[a].style.display = 'none';
                }
                //display only vitrine projects
                for (let a = 0; a < vitrine.length; a++) {
                    vitrine[a].style.display = 'block';
                }}
            
            else if (projectType.value === "commerce") {
                for (let a = 0; a < all.length; a++) {
                    all[a].style.display = 'none';
                }
                //display only vitrine projects
                for (let c = 0; c < commerce.length; c++) {
                    commerce[c].style.display = 'block';
                }}
            
            else if (projectType.value === "all") {
                for (let a = 0; a < all.length; a++) {
                    all[a].style.display = 'block';
                }}
        }
    }
}