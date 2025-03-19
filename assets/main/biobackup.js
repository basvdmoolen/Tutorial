import '../styles/bio.css';

class Biography {
    constructor() {
        this.init();
    }

    init() {
        document.title = 'Homepage';

        $('a.admin').on('click', function() {
            alert("You Don't Have Permission, login as admin")
            //$('button.project').attr('disabled', 'disabled')
        })

        $('a.access').on('click', function() {
            console.log($(this))
            //$('button.project').attr('disabled', 'disabled')
        })

        /* $('.project').on('click', function() {
            alert("U Don't Have Permission")
        }) */
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    const biography = new Biography();
});