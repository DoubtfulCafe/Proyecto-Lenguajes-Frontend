const select = document.querySelector("#selection");
const seleccion = document.querySelector("#seleccionados");
const removeBtn = document.querySelectorAll(".badge");

let selectedElements = [];

select.addEventListener("change", takeValue);
function takeValue(e) {
    if (selectedElements.indexOf(e.target.value) !== -1) {
        return 0;
    }
    let newCard = document.createElement("li");
    let name = document.createElement("div");
    let closeBtn = document.createElement("a");

    name.classList.add("fw-bold");
    newCard.classList.add(
        "list-group-item",
        "d-flex",
        "justify-content-between",
        "align-items-start"
    );
    closeBtn.setAttribute("data-code", e.target.value);

    closeBtn.classList.add("badge", "bg-warning", "rounded-pill");
    closeBtn.innerHTML = "X";
    closeBtn.addEventListener("click", removeValue);

    name.innerHTML = select.options[e.target.value - 1].text;
    selectedElements.push(e.target.value);

    newCard.appendChild(name);
    newCard.appendChild(closeBtn);

    seleccion.appendChild(newCard);

}

function removeValue(e){
    let removeElement = selectedElements.indexOf(e.target.dataset.code);
    selectedElements.splice(removeElement,1);
    e.target.parentElement.parentElement.removeChild(e.target.parentElement);

}