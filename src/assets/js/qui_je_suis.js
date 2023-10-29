// Sélectionnez tous les éléments avec la classe "competence-item"
const competenceItems = document.querySelectorAll(".competence-item");

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
