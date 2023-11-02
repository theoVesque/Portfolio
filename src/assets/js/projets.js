function tabProjets(projetType) {
  var i;
  var x = document.getElementsByClassName("projet");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(projetType).style.display = "flex";
}

// Récupérez les boutons
var buttonPersonnels = document.getElementById("button_projet_personnels");
var buttonScolaires = document.getElementById("button_projet_scolaires");

function tabProjets(projetType) {
  var i;
  var x = document.getElementsByClassName("projet");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(projetType).style.display = "flex";

  if (projetType === "personnels") {
    buttonPersonnels.classList.add("selected");
    buttonScolaires.classList.remove("selected");
  } else if (projetType === "scolaires") {
    buttonScolaires.classList.add("selected");
    buttonPersonnels.classList.remove("selected");
  }
}

// Sélectionnez tous les éléments avec la classe "competence-item"
const competenceItems = document.querySelectorAll(".projets-item");

// Ajoutez des gestionnaires d'événements aux éléments
competenceItems.forEach((competenceItems) => {
  competenceItems.addEventListener("mouseenter", function (event) {
    hover_noir();
    console.log("mouseenter");
  });

  competenceItems.addEventListener("mouseleave", function (event) {
    resetCursor();
    console.log("mouseenter");
  });
});
