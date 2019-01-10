<script>
fetch(`/api/organization/getAllEvents`, {
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
    let datee = new Date(eve.date)
    let div = document.createElement('div')
    div.classList.add('col-md-6')
    div.classList.add('col-lg-4')
    div.innerHTML = `
    <div class="single-event event-three-col mb-30">
        <div class="event-img img-full">
            <img draggable="false" src="${eve.image}" alt="">
        </div>
        <a href="<?php echo base_url('eventDetail'); ?>">
            <div class="single-event-title">
                <div class="event-date">
                    <h4>${datee.toDateString()}</h4>
                </div>
                <div class="event-content">
                    <h3>${eve.name}</h3>
                    <p>${eve.address}. ${datee.toDateString()} at 10 am</p>
                </div>
            </div>
        </a>
    </div>
    `
    document.querySelector('#events-wrapper').append(div)
  })
})
</script>