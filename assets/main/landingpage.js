// import '../styles/landingpage.css';

class LandingPage {
    constructor() {
        this.init();
    }

    init() {
        document.title = 'Bedrijfsnaam';

        $('a.admin').on('click', function() {
            alert("You Don't Have Permission, login as admin")
            //$('button.project').attr('disabled', 'disabled')
        })

        $('a.access').on('click', function() {
            console.log($(this))
            //$('button.project').attr('disabled', 'disabled')
        })

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })

        /* $('.project').on('click', function() {
            alert("U Don't Have Permission")
        }) */
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    const landingpage = new LandingPage();
});