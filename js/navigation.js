
var acceuil = document.getElementById("acceuil_btn");
var a_propos = document.getElementById('a_propos_btn');
var programme = document.getElementById('programme_btn');
var workshops = document.getElementById('workshops_btn')
var contact = document.getElementById('contact_btn');
var register = document.getElementById('register_btn');
var upBtn = this.document.getElementById("upBtn");
var logo = this.document.getElementById("logo");

acceuil.addEventListener("click", function () {
    scrollToSection('acceuil');
});
a_propos.addEventListener('click', function () {
    scrollToSection('a_propos');
});
programme.addEventListener('click', function () {
    scrollToSection('programme');
});
workshops.addEventListener('click', function () {
    scrollToSection('workshops');
})
contact.addEventListener('click', function () {
    scrollToSection('contact');
});
register.addEventListener('click', function () {
    scrollToSection('registration');
});
upBtn.addEventListener("click", function () {
    scrollToSection('acceuil');
});
logo.addEventListener("click", function () {
    scrollToSection('acceuil');
});



function scrollToSection(id) {
    // Get the position of the section you want to jump to
    var sectionPosition = document.getElementById(id).offsetTop;

    // Scroll to the section position
    window.scrollTo({
        top: sectionPosition,
        behavior: "smooth"
    });
}



