$("#delete-modal").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var id = button.data("usuario");

  var modal = $(this);
  modal.find(".modal-title").text("Excluir Usuario #" + id);
  modal.find("#confirm").attr("href", "delete.php?id=" + id);
});
