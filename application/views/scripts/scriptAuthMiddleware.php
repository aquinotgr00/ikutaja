<script>
  const checkIfLoggedIn = () => {
    const token = localStorage.getItem('Authorization')
    if (token !== null) {
      return true // user loggedin
    }
    return false // user not loggedin
  }

  const redirectUser = () => {
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
    // .then(res => console.log(res))
    .then(res => {
      if (res === '3') {
        window.location = '/admin/dashboard'
      }
      window.location = res == 1 ? '/volunteer/dashboard' : '/organizations/dashboard'
    })
  }

  const redirect = (url='/auth/login', needLoggedIn= true) => {
    if(!needLoggedIn) {
      if(checkIfLoggedIn()) {
        window.location = url
      }
    } else {
      if (!checkIfLoggedIn()) {
        window.location = url
      }
    }
  }
</script>