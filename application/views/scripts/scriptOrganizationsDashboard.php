<script>
redirect()

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
.then(res => res == 1 ? window.location = '/volunteer/dashboard':null)

</script>