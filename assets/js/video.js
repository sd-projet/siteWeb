
const lienVideo = document.getElementById('lienVideo');
const videoContainer = document.getElementById('videoContainer');
const maVideo = document.getElementById('maVideo');
const fermerVideo = document.getElementById('fermerVideo');

lienVideo.addEventListener('click', function (e) {
    e.preventDefault(); // Empêche le comportement par défaut du lien

    // Affiche le conteneur de la vidéo et la vidéo elle-même
    videoContainer.style.display = 'block';
    maVideo.play();
});

// Gère la fermeture de la vidéo
fermerVideo.addEventListener('click', function () {
    // Masque le conteneur de la vidéo et met en pause la vidéo
    videoContainer.style.display = 'none';
    maVideo.pause();
});

