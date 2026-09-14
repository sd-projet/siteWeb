function openVideo(event) {
    event.preventDefault();

    const modal = document.getElementById("videoModal");
    modal.style.display = "flex";
}

function closeVideo(event) {
    if (
        event.target.id === "videoModal" ||
        event.target.classList.contains("video-close")
    ) {
        const modal = document.getElementById("videoModal");
        modal.style.display = "none";
    }
}
