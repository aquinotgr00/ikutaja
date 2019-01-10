<script>
  const checkIfLoggedIn = () => {
    const token = localStorage.getItem('Authorization')
    if (token !== null) {
      return true // user loggedin
    }
    return false // user not loggedin
  }

  const showLogoutBtn = () => {
    document.querySelector('#login-btn').style.display = 'none'
    document.querySelector('#logout-btn').style.display = 'inline-block'
  }

  const showUserLinks = () => {
    document.querySelector('#loggedin-user-links').style.display = 'inline-block'
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
      let li = document.createElement('li')
      let anc = ``
      if (res['type'] == '1') {
        anc = `<a href="/volunteer/dashboard">Dashboard</a>`
      } else if (res['type'] == '2') {
        anc = `<a href="/organizations/dashboard">Dashboard</a>`
      }
      li.innerHTML = anc
      document.querySelector('#loggedin-user-ul').append(li)
      document.querySelector('#loggedin-user-name').innerHTML = res['username']
    })
  }

  const hideUserLinks = () => {
    document.querySelector('#loggedin-user-links').style.display = 'none'
  }

  const showLoginBtn = () => {
    document.querySelector('#logout-btn').style.display = 'none'
    document.querySelector('#login-btn').style.display = 'inline-block'
  }

  if (checkIfLoggedIn()) {
    showLogoutBtn()
    showUserLinks()
  } else {
    showLoginBtn()
    hideUserLinks()
  }

  document.querySelector('#logout-btn').addEventListener('click', e => {
    e.preventDefault()
    logout()
  })

  const logout = () => {
    localStorage.removeItem('Authorization');
    window.location = '/'
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
      if (res['type'] == '3') {
        window.location = '/dashboard/admin'
      } else {
        window.location = res['type'] == 1 ? '/volunteer/dashboard' : '/organizations/dashboard'
      }
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