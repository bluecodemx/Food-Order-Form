// Validation style
const form = document.querySelectorAll ('.needs-validation');
// Loop Validation Style
Array.from(form).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
