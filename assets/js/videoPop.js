
const lienVideo2 = document.getElementById('lienVideo2');
const videoContainer2 = document.getElementById('videoContainer2');
const maVideo2 = document.getElementById('maVideo2');
const fermerVideo2 = document.getElementById('fermerVideo2');


lienVideo2.addEventListener('click', function (e) {
    e.preventDefault(); // Empêche le comportement par défaut du lien

    // Affiche le conteneur de la vidéo et la vidéo elle-même
    videoContainer2.style.display = 'block';
    maVideo2.play();
});

// Gère la fermeture de la vidéo
fermerVideo2.addEventListener('click', function () {
    // Masque le conteneur de la vidéo et met en pause la vidéo
    videoContainer2.style.display = 'none';
    maVideo2.pause();
});