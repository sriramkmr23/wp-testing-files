document.addEventListener('DOMContentLoaded', function () {
    var dropdownItem = document.querySelector('.menu-item');
    var dropdown = document.querySelector('.sub-menu');

    dropdownItem.addEventListener('mouseenter', function (e) {
        dropdown.classList.add('dropdown-show');
    });
    dropdownItem.addEventListener('mouseleave', function () {
        dropdown.classList.remove('dropdown-show');
    })

})
