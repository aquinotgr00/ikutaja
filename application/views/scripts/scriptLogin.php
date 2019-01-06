<script>
if(checkIfLoggedIn()) {
  redirectUser()
}

$(document).ready(function (){

  const showNotifBox = ({ success, message }) => {
    const notifBox = document.querySelector('#msg-notif')
    const par = document.createElement('p')
    document.querySelector('#msg-notif-heading').innerHTML = 'Failed'
    par.innerHTML = `Error happened: ${message}`
    notifBox.appendChild(par)
    notifBox.style.display = 'block'
    setTimeout(() => notifBox.style.display = 'none', 3000);
    setTimeout(() => notifBox.removeChild(notifBox.lastChild), 4000);
  }

  // handle fetching data to API
  const postLoginCred = (url='', data={}) => {
    fetch(url, {
      method: 'POST',
      mode: 'cors',
      body: JSON.stringify(data),
      headers:{
        'Content-Type': 'application/json'
      }
    })
    .then(res => res.json())
    .catch(error => console.error('Error:', error))
    .then(response => {
      if (response.success == 0) {
        showNotifBox(response)
      }
      localStorage.setItem('Authorization', `Bearer ${response.result.token}`)
      // window.location = response.result.redirect == 1 ? '/volunteer/dashboard' : '/organizations/dashboard'
      redirectUser()
    })
  }

  // when login form get submitted
  $('#login-form').submit(function (e) {
    e.preventDefault()
    let formDataObj = {}
    $( this )
      .serializeArray()
      .map(data => {
        formDataObj[data.name] = data.value
      })
    
    postLoginCred(`${window.location.origin}/api/auth/login`, formDataObj)
  })

}) // end of $(document).ready()
</script>