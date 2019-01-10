<script>
console.log(checkIfLoggedIn())
if (!checkIfLoggedIn()) {
    window.location = '/'
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
.then(res => {
    if (res['type'] == 1) {
        window.location = '/volunteer/dashboard'
    } else if (res['type'] == 2) {
        window.location = '/organizations/dashboard'
    }
})
</script>