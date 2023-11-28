// Attendre que le document soit prêt
$(document).ready(function() {
  // Sélectionner les éléments HTML pertinents en utilisant des sélecteurs jQuery
  const $popupLink = $("#popup-link"); // Le lien pour afficher la popup
  const $popup = $("#popup"); // La div de la popup
  const $closePopup = $("#close-popup"); // Le lien pour fermer la popup
  const $darkModeTrigger = $(".dark-mode-trigger"); // La div qui active le mode sombre au survol
  const $darkModeContent = $(".dark-mode-content"); // La div dont le fond change en mode sombre

  // Gérer le clic sur le lien pour afficher la popup
  $popupLink.on("click", function(e) {
    e.preventDefault(); // Empêcher le comportement par défaut du lien
    $popup.css("display", "block"); // Afficher la popup en modifiant la propriété CSS
  });

  // Gérer le clic sur le lien pour fermer la popup
  $closePopup.on("click", function(e) {
    e.preventDefault(); // Empêcher le comportement par défaut du lien
    $popup.css("display", "none"); // Masquer la popup en modifiant la propriété CSS
  });

  // Gérer le survol de la div pour activer le mode sombre
  $darkModeTrigger.on("mouseenter", function() {
    $darkModeContent.css("background-color", "#333"); // Modifier le fond en mode sombre
  });

  // Gérer la sortie du survol de la div pour désactiver le mode sombre
  $darkModeTrigger.on("mouseleave", function() {
    $darkModeContent.css("background-color", "#fff"); // Rétablir le fond en mode normal
  });
});