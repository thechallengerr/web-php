$(document).ready(function () {
    $(".editSchedule").on("click", (event) => {
        var id = event.target.value;
        var url = window.location.href;
        window.location.replace(url + "?id=" + id);
    })
});