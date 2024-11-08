function togglePopup() {
    const popupForm = document.getElementById("popupForm");
    const overlay = document.getElementById("overlay");
  
    popupForm.classList.toggle("active");
    overlay.classList.toggle("active");
  }