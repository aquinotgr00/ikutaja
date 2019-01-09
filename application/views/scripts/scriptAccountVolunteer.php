<script>
const $jq = jQuery.noConflict();
$jq(document).ready(() => {

    const editClassButton = document.querySelectorAll('.vol-edit-button')
    const delClassButton = document.querySelectorAll('.vol-del-button')

    $jq('#form-edit-vol').submit(e => {
        e.preventDefault()
        let formDataObj = {}
        $jq( '#form-edit-vol' )
        .serializeArray()
        .map(data => {
            formDataObj[data.name] = data.value
        })

        const url = `/api/volunteer/updateVolunteer/${formDataObj['id']}`
        console.log(url)
        fetch(url, {
            method: 'POST',
            mode: 'cors',
            body: JSON.stringify(formDataObj),
            headers:{
                'Content-Type': 'application/json',
                'Authorization': localStorage.getItem('Authorization')
            }
        })
        .then(response => response.json())
        .catch(error => console.error('Error:', error))
        .then(res => location.reload())
    })

    $jq('#form-del-vol').submit(e => {
        e.preventDefault()
        let formDataObj = {}
        
        const form = document.forms['form-del-vol']
        id = form['id'].value

        fetch(`/api/volunteer/delete/${id}`, {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': localStorage.getItem('Authorization')
            }
        })
        .then(response => response.json())
        .catch(error => console.error('Error:', error))
        .then(res => location.reload())
    })

    Array.from(delClassButton).forEach(function(element) {
        element.addEventListener('click',
        (e) => {
            id = element.getAttribute('data-vol-id')
            $jq('#vol-del-id').text(id)
            const form = document.forms['form-del-vol']
            form['id'].value = id
        })
    })

    Array.from(editClassButton).forEach(function(element) {
        element.addEventListener('click', 
        (e) => {
            id = element.getAttribute('data-vol-id')
            fetch(`/api/volunteer/${id}`, {
                method: 'GET',
                mode: 'cors',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': localStorage.getItem('Authorization')
                }
            })
            .then(response => response.json())
            .catch(error => console.error('Error:', error))
            .then(res => {
                const form = document.forms['form-edit-vol']
                form['first_name'].value = res.result.volunteers.first_name
                form['last_name'].value = res.result.volunteers.last_name
                form['description'].value = res.result.volunteers.description
                form['profession'].value = res.result.volunteers.profession
                form['address'].value = res.result.volunteers.address
                form['id'].value = res.result.volunteers.id
            })
        })
    })

})
</script>