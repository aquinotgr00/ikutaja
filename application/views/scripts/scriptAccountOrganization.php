<script>
const $jq = jQuery.noConflict();
$jq(document).ready(() => {

    const editClassButton = document.querySelectorAll('.org-edit-button')
    const delClassButton = document.querySelectorAll('.org-del-button')

    $jq('#form-edit-org').submit(e => {
        e.preventDefault()
        let formDataObj = {}
        $jq( '#form-edit-org' )
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

    $jq('#form-del-org').submit(e => {
        e.preventDefault()
        let formDataObj = {}
        
        const form = document.forms['form-del-org']
        id = form['id'].value

        fetch(`/api/organization/delete/${id}`, {
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
            id = element.getAttribute('data-org-id')
            $jq('#org-del-id').text(id)
            const form = document.forms['form-del-org']
            form['id'].value = id
        })
    })

    Array.from(editClassButton).forEach(function(element) {
        element.addEventListener('click', 
        (e) => {
            id = element.getAttribute('data-org-id')
            console.log(id)
            fetch(`/api/organization/${id}`, {
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
                console.log(res)
                const form = document.forms['form-edit-org']
                // form['first_name'].value = res.result.organizations.first_name
                // form['last_name'].value = res.result.organizations.last_name
                // form['description'].value = res.result.organizations.description
                // form['profession'].value = res.result.organizations.profession
                // form['address'].value = res.result.organizations.address
                // form['id'].value = res.result.organizations.id
            })
        })
    })

})
</script>