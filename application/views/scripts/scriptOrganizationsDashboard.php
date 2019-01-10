<script>

let user_id = 0

fetch(`/api/organization/getAllEventsById`, {
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
  res.map(eve => {
    let tr = document.createElement('tr')
    tr.innerHTML = `
      <td> #${eve.id} </td>
      <td><span class="name">${eve.name}</span></td>
      <td><span class="product">${eve.date}</span></td>
      <td><span class="product">${eve.address}</span></td>
      <td><span class="product">${eve.kuota}</span></td>
      <td>
          <button type="button" class="btn btn-success mb-1 eve-edit-btn" data-eve-id="${eve.id}" data-toggle="modal" data-target="#mediumModal">
              EDIT
          </button>
          <button type="button" class="btn btn-danger mb-1 eve-del-btn" data-eve-id="${eve.id}" data-toggle="modal" data-target="#askModal">
              DELETE
          </button>
      </td>
    `
    document.querySelector('#tbody-org-event').append(tr)
  })
})

const getOrgByUserId = () => {
  fetch(`/api/user/getOrgById/${user_id}`, {
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
    document.querySelector('#form-org-id').value = res['id']
  })
}

fetch(`${window.location.origin}/api/auth/redirectUser`, {
  method: 'GET',
  mode: 'cors',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': localStorage.getItem('Authorization')
  }
})
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(res => res['type'] == 1 ? window.location = '/volunteer/dashboard':null)

fetch(`/api/auth/getUserFromToken`, {
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
  user_id = res
  getOrgByUserId()
})

$('#org-add-event').submit(e => {
  e.preventDefault()
  let formDataObj = {}
  $( '#org-add-event' )
  .serializeArray()
  .map(data => {
      formDataObj[data.name] = data.value
  })

  const url = `/api/organization/createEvent`
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

</script>