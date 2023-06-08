let modalDelete = $('#modalDeleteItem');
let form;
console.log('delete.js');

const dataTableDeleteBtn = $(".deleteItem");

dataTableDeleteBtn.on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    form = $(this).closest("form");
    modalDelete.modal('show');
    modalDelete.one('click', '#deleteBtn', () => {
        form.submit();
    });
    modalDelete.on('hidden.bs.modal', () => {
        modalDelete.off('click');
    });
});


let closeDelete = $("#close-delete");
let cancelDelete = $("#cancel-delete");


cancelDelete.on("click", function () {
    modalDelete.modal('hide');
});
closeDelete.on("click", function () {
    modalDelete.modal('hide');
});

