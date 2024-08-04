function d(){
    document.getElementById('fetchButton').addEventListener('click', () => {
        fetch('https://login-register.hstn.me/index.php')
            .then(response => response.json())
            .then(data => {
                const userInfoDiv = document.getElementById('userInfo');
                userInfoDiv.innerHTML = `
                    <p>ID: ${data.id}</p>
                    <p>Name: ${data.name}</p>
                    <p>Email: ${data.email}</p>
                    <p>Age: ${data.age}</p>
                `;
            })
            .catch(error => console.error('Error fetching user data:', error));
    });
    
}