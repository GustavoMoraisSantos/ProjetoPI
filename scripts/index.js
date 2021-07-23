const dropDown = document.getElementById('dropdown-mobile')

function openDropDownMobile() {
    console.log("qualquer coisa", dropDown.classList)
    if (dropDown.classList == 'menu__dropdown-mobile--hidden') {
        dropDown.classList = 'menu__dropdown-mobile--visible'
    } else {
        dropDown.classList = 'menu__dropdown-mobile--hidden'
    }
}