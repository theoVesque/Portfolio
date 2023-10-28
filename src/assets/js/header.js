// Sélectionnez tous les éléments avec la classe "menu-item"
const menuItems = document.querySelectorAll(".menu-item");

// Ajoutez des gestionnaires d'événements aux éléments
menuItems.forEach((menuItem) => {
  menuItem.addEventListener("mouseenter", function (event) {
    hover_noir();
    menuItem.style.backgroundColor = "#FFDE6A";
  });

  menuItem.addEventListener("mouseleave", function (event) {
    resetCursor();
    menuItem.style.backgroundColor = "#E6E6E6";
  });
});

// Définition de cursorInner et autres fonctionnalités de curseur
const cursorInner = document.querySelector(".cursor--inner");

// Fonctions de survol
function hover_jaune() {
  cursorInner.style.borderColor = "#FFDE6A";
}

function hover_blanc() {
  cursorInner.style.borderColor = "#E6E6E6";
}

function hover_noir() {
  cursorInner.style.borderColor = "#0E0E0E";
}

function resetCursor() {
  cursorInner.style.borderColor = "#FFDE6A"; // Réinitialisez le curseur à sa couleur par défaut
}

// Autre code de curseur
// ...

function hover_jaune() {
  cursorInner.style.borderColor = "#FFDE6A"; // Couleur du curseur pour hover1
}

function hover_blanc() {
  cursorInner.style.borderColor = "#E6E6E6"; // Couleur du curseur pour hover2
}

function hover_noir() {
  cursorInner.style.borderColor = "#0E0E0E"; // Couleur du curseur pour hover2
}

const cursor = document.querySelector("#cursor");
let mouse = { x: 300, y: 300 };
let pos = { x: 0, y: 0 };
const speed = 0.1; // between 0 and 1

const updatePosition = () => {
  pos.x += (mouse.x - pos.x) * speed;
  pos.y += (mouse.y - pos.y) * speed;
  cursor.style.transform = "translate3d(" + pos.x + "px ," + pos.y + "px, 0)";
};

const updateCoordinates = (e) => {
  mouse.x = e.clientX;
  mouse.y = e.clientY;
};

window.addEventListener("mousemove", updateCoordinates);

function loop() {
  updatePosition();
  requestAnimationFrame(loop);
}

requestAnimationFrame(loop);
