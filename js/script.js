const addForm = document.getElementById("add-form-container");
const updateForm = document.getElementById("update-form-container");
const deleteForm = document.getElementById("dlt-form")

function toggleAddForm() {
    addForm.style.display = "block";
    updateForm.style.display = "none";
    deleteForm.style.display = "none";
}

function toggleUpdateForm() {
    addForm.style.display = "none";
    updateForm.style.display = "block";
    deleteForm.style.display = "none";
}

function toggleDeleteForm() {
    addForm.style.display = "none";
    updateForm.style.display = "none";
    deleteForm.style.display = "block";
}
