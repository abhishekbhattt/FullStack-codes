document.getElementById("insert").addEventListener("click", function () {
  const newElement = document.createElement("p");
  newElement.textContent = " This is a new paragraph ";
  document.body.appendChild(newElement);
});

document.getElementById("modify").addEventListener("click", function () {
  const currentElement = document.getElementById("paragraph");
  currentElement.textContent = "This is the modified paragraph ";
});

document.getElementById("delete").addEventListener("click", function () {
  const currentElement = document.getElementById("paragraph");
  currentElement.remove();
});
