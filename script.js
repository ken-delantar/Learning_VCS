fetch('https://login-register.hstn.me/index.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => console.error('Error fetching user data:', error));
