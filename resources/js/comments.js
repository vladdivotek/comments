document.querySelectorAll('.comment-answer').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            document.querySelectorAll('.comment-answer').forEach(otherCheckbox => {
                if (otherCheckbox !== this) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});

document.querySelector('#send-comment').addEventListener('click', function () {
    let submit = this;
    let comment_form = submit.closest('.comment-form');
    let action = comment_form.getAttribute('action');
    let data = {
        'name': comment_form.querySelector('[name=name]').value,
        'email': comment_form.querySelector('[name=email]').value,
        'link': comment_form.querySelector('[name=link]').value,
        'text': comment_form.querySelector('[name=text]').value
    };

    document.querySelectorAll('.comment-answer').forEach((comment_answer) => {
        if (comment_answer.checked) data.comment_id = comment_answer.dataset.comment;
    });

    if (!comment_form.checkValidity()) {
        comment_form.classList.add('was-validated');
        return;
    }

    this.setAttribute('disabled', true);

    axios.post(action, data)
        .then(function (response) {
            // Swal.fire({
            //     title: response.data.comment,
            //     // text: response.data.status_message,
            //     icon: 'success',
            //     confirmButtonText: 'OK',
            //     confirmButtonColor: 'rgb(96, 148, 255)',
            //     timer: 2000,
            //     timerProgressBar: true
            // });
            // setTimeout(function() {
            //     location.reload();
            // }, 2000);
        })
        .catch(function (error) {
            console.log(error);
        });
});
