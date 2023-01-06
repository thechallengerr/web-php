$(document).ready(function () {
    $(".deleteSchedule").on("click", (event) => {
        var idDelete = event.target.value;
        var url = window.location.href;
        $("#isToast").css("display", "flex");
        $("#confirmDelete").on("click", () => {
            window.location.replace(url + "?idDelete=" + idDelete);
        })
    })
    $("#cancelDelete").on('click', () => {
        $("#isToast").css("display", "none");
    })
});