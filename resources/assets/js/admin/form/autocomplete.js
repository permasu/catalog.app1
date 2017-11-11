jQuery(document).ready(function ($) {
    $("#address").suggestions({
        token: "ed1a3252fc2e894545b8be7ae518dad98781de66",
        type: "ADDRESS",
        /* Вызывается, когда пользователь выбирает одну из подсказок */
        onSelect: function(suggestion) {
            console.log(suggestion);
        }
    });
});
