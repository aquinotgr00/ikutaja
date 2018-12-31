<script>
  const checkIfLoggedIn = () => {
    const token = localStorage.getItem('Authorization')
    if (token !== null) {
      return true // user loggedin
    }
    return false // user not loggedin
  }

  const init = (url, needLoggedIn) => {
    redirect(url, needLoggedIn)
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