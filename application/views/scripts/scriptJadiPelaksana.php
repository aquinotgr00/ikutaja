<script>
jQuery(document).ready(function() {
    /*
      Form
  */
    $('.registration-form fieldset:first-child').fadeIn('slow')

    $(
        '.registration-form input[type="text"], .registration-form input[type="password"], .registration-form input[type="email"], .registration-form textarea'
    ).on('focus', function() {
        $(this).removeClass('input-error')
    })

    // next step
    $('.registration-form .btn-next').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset')
        var next_step = true

        parent_fieldset
            .find(
                'input[type="text"], input[type="password"], input[type="email"], textarea'
            )
            .each(function() {
                if ($(this).val() == '') {
                    $(this).addClass('input-error')
                    next_step = false
                } else {
                    $(this).removeClass('input-error')
                }
            })

        if (next_step) {
            parent_fieldset.fadeOut(400, function() {
                $(this)
                    .next()
                    .fadeIn()
            })
        }
    })

    // previous step
    $('.registration-form .btn-previous').on('click', function() {
        $(this)
            .parents('fieldset')
            .fadeOut(400, function() {
                $(this)
                    .prev()
                    .fadeIn()
            })
    })

    // fetch data
    const fetchData = (url, method = 'GET', data = {}) => {
        fetch(url, {
            method: method,
            mode: 'cors',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json',
                Authorization: localStorage.getItem('Authorization')
            }
        })
            .then(response => response.json())
            .catch(error => console.error('Error:', error))
            .then(res => window.location = `${window.location.origin}/auth/login?success=sukses-registrasi`)
    }

    // submit
    $('#form-jadi-pelaksana').submit(e => {
        e.preventDefault()
        let formDataObj = {}

        $(this)
            .find(
                'input[type="text"], input[type="password"], input[type="email"], textarea'
            )
            .each(function() {
                if ($(this).val() == '') {
                    e.preventDefault()
                    $(this).addClass('input-error')
                } else {
                    $(this).removeClass('input-error')
                }
            })

        $('#form-jadi-pelaksana')
            .serializeArray()
            .map(data => {
                formDataObj[data.name] = data.value
            })

        fetchData(
            `${window.location.origin}/api/organization`,
            'POST',
            formDataObj
        )
    })
}) // end of document ready.

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader()
        reader.onload = function(e) {
            $('#imagePreview').css(
                'background-image',
                'url(' + e.target.result + ')'
            )
            $('#imagePreview').hide()
            $('#imagePreview').fadeIn(650)
        }
        reader.readAsDataURL(input.files[0])
    }
}
$('#imageUpload').change(function() {
    readURL(this)
})
</script>
