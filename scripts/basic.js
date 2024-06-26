function zoekProduct(x){
    console.log(x);
}
// Selecteer het video element in de HTML
const videoElement = document.getElementById('video');

// Functie om de camera te starten
async function startCamera() {
  try {
    // Toegang verkrijgen tot de camera
    const stream = await navigator.mediaDevices.getUserMedia({ video: true });

    // Video element koppelen aan de camera stream
    videoElement.srcObject = stream;
  } catch (error) {
    console.error('Fout bij het openen van de camera:', error);
  }
}

// Event listener voor het laden van de pagina
document.addEventListener('DOMContentLoaded', () => {
  startCamera();
});
