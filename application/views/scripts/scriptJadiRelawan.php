<script>
$(document).ready(function() {

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

    $('#jadipelaksana-form').submit(e => {
        e.preventDefault()
        let formDataObj = {}

        $('#jadipelaksana-form')
            .serializeArray()
            .map(data => {
                formDataObj[data.name] = data.value
            })

        console.log(formDataObj)

        fetchData(
            `${window.location.origin}/api/volunteer`,
            'POST',
            formDataObj
        )
    })

})
</script>