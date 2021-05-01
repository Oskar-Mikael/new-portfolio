//Function for toggling CV dropdown menu
$('#dropdown').on('click', () => {
    if ($('#dropdown-content').css('display') == 'none') {

        $('#dropdown-content').hide().slideToggle(300);
        $('#dropdown-arrow').css('transform', 'rotate(180deg)');

    } else {

        $('#dropdown-content').show().slideToggle(300);
        $('#dropdown-arrow').css('transform', 'rotate(0deg)');
    }
})

$(document).click( () => {
    $('#dropdown-content').hide().slideUp(300);
    $('#dropdown-arrow').css('transform', 'rotate(0deg)');
})

$('#dropdown').click( (e) => {
    e.stopPropagation();
})