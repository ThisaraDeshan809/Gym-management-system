text = document.querySelector("[profile-visibility-toggle-label]").firstElementChild;
toggler = document.querySelector("[profile-visibility-toggle]");
toggler.addEventListener("change", function () {
  if (this.checked) {
    text.innerText = "Switch to inactive";
  } else {
    text.innerText = "Switch to active";
  }
});
