let lists = document.querySelectorAll(".todo-item");
let left = document.querySelector(".not-done");
let right = document.querySelector(".done");
for (let list of lists) {
    list.addEventListener("dragstart", function (e) {
        let selected = e.target;
        right.addEventListener("dragover", function (e) {
            e.preventDefault();
        });
        right.addEventListener("drop", function (e) {
            right.appendChild(selected);
            selected = null;
        });

        left.addEventListener("dragover", function (e) {
            e.preventDefault();
        });
        left.addEventListener("drop", function (e) {
            left.appendChild(selected);
            selected = null;
        });
    });
}

function deleteProject() {
    if (lists.length > 0) {
        alert("You must delete all issue first");
        return false;
    }
    return true;
}
