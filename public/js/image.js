$(document).ready(function (e) {
    $(".logo-sampul").change(function () {
        let reader = new FileReader();

        reader.onload = (e) => {
            $(".show-image-sampul").attr("src", e.target.result);
        };

        reader.readAsDataURL(this.files[0]);
    });
});
