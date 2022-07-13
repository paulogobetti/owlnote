function edit(id, taskPlaceholder) {

    const form = document.createElement('form')
    form.action = 'public-controller.php?new=update'
    form.method = 'POST'
    form.className = 'row'

    const inputTask = document.createElement('input')
    inputTask.type = 'text'
    inputTask.name = 'task'
    inputTask.className = 'col-6 mr-4 form-control'
    inputTask.value = taskPlaceholder

    const inputId = document.createElement('input')
    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id

    const button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-4 btn btn-success'
    button.innerHTML = 'Update'

    form.appendChild(inputTask)
    form.appendChild(inputId)
    form.appendChild(button)

    const task = document.getElementById('task-' + id)

    task.innerHTML = ''

    task.insertBefore(form, task[0])

}

function remove(id) {

    location.href = 'list-items.php?new=remove&id=' + id;

}

function markComplete(id) {

    location.href = 'list-items.php?new=complete&id=' + id;

}
