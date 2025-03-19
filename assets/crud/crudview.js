class TodoDetails {
    constructor() {
        let s = this;

        /* document.title = 'Todolist Menu'; */

        $('#todo_list_form_name').addClass('form-control')
        s.list = $("#todo_list_form_list").val()
        $("#todo_list_form_list").remove()

        $('#target').append(s.workArea())
        
        s.data()
    }

    workArea() {
        let s = this

        let workarea = $('<div/>', {class: 'col-6 mx-auto', id: 'workarea'})

        return workarea
    }

    data() {
        let s = this;

        s.list = s.list.split(',')
        let splice = s.list.splice(s.list.length - 1, 1)

        for (let i = 0; i < s.list.length; i++) {
            console.log($('#workarea'))
            $('#workarea').append(s.item(s.list[i]))
        }
    }

    item(val) {
        console.log(val)
        let inputgroup = $('<div/>', {class: 'input-group mb-1'})
        let input = $('<input/>', {class: 'form-control form-control-sm'}).val(val).appendTo(inputgroup)
        let button = $('<a/>', {class: 'btn btn-sm btn-danger'}).html('<i class="fas fa-minus">').appendTo(inputgroup)

        button.on('click', function() {
            $(this).parent().remove()
        })

        return inputgroup
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    const tododetails = new TodoDetails();
});