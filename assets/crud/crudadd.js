class TodoAdd {
    constructor() {
        let s = this;

        $('#todo_list_form_submit').addClass('btn btn-sm btn-success')
        $('#todo_list_form_name').addClass('form-control').attr('placeholder', 'Name of list')
        $("#todo_list_form_list").remove()

        $('#target').append(s.workArea())
    }

    workArea() {
        let s = this;

        let workarea = $('<div/>', {class: 'col-6 mx-auto', id:'workarea'})

        let inputgroup = $('<div/>', {class: 'input-group mb-1'}).appendTo(workarea)
        let input = $('<input/>', {class: 'form-control form-control-sm', placeholder: 'Add Task'}).appendTo(inputgroup)
        let button = $('<a/>', {class: 'btn btn-sm btn-secondary'}).html('<i class="fas fa-add">').appendTo(inputgroup)
        let textarea = $('<textarea/>', {id: 'todo_list_form_list', name: 'todo_list_form[list]', required: 'required', class: 'form-control'}).appendTo(workarea)

        button.on('click', function() {
            let value = input.val()
            let textarea = document.getElementById('todo_list_form_list');
            textarea.value += value + ',' + '\r\n';
            input.val('')
            $(input).focus()
        })
        
        return workarea
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    const todoadd = new TodoAdd();
});