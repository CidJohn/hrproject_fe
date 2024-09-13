// window.onload = function () {
//   setTimeout(() => {
//     window.location.reload(1);
//   }, 3000);
// };

const passwordField = document.getElementById("password");
const togglePassword = document.getElementById("togglePassword");

togglePassword.addEventListener("click", () => {
  // Toggle the type attribute
  const type =
    passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);

  // Toggle the eye / eye-slash icon
  if (togglePassword.classList.contains("fa-eye")) {
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
});
