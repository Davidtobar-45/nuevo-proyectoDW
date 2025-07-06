document.getElementById("addBtn").addEventListener("click", agregarTarea);

function agregarTarea() {
  const input = document.getElementById("taskInput");
  const texto = input.value.trim();
  const mensaje = document.getElementById("mensajeError");

  if (texto === "") {
    mensaje.textContent = "Por favor, ingresa una tarea.";
    return;
  }

  mensaje.textContent = "";

  const li = document.createElement("li");

  const checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkbox.className = "task-checkbox";
  checkbox.id = "task-" + Date.now(); 
  const label = document.createElement("label");
  label.htmlFor = checkbox.id;
  label.className = "task-label";

  const puntoSpan = document.createElement("span");
  puntoSpan.textContent = "•";
  puntoSpan.style.color = "black";
  puntoSpan.style.marginRight = "10px";
  puntoSpan.style.fontWeight = "bold";

  const textoSpan = document.createElement("span");
  textoSpan.textContent = texto;

  label.appendChild(puntoSpan);
  label.appendChild(textoSpan);

  const deleteBtn = document.createElement("button");
  deleteBtn.textContent = "Eliminar";
  deleteBtn.className = "deleteBtn";

  deleteBtn.addEventListener("click", function () {
    li.remove();
  });

  li.appendChild(checkbox);
  li.appendChild(label);
  li.appendChild(deleteBtn);
  document.getElementById("taskList").appendChild(li);

  input.value = "";
  input.focus();
}
