document.getElementById('userForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;

    // Prepare the data to be sent
    const data = {
        name: name,
        email: email,
        age: age
    };

    fetch('https://login-register.hstn.me/index.php', {
        method: 'POST', // Use POST method for form submission
        headers: {
            'Content-Type': 'application/json' // Indicate the content type is JSON
        },
        body: JSON.stringify(data) // Convert data to JSON
    })
    .then(response => response.json())
    .then(result => {
        // Display the response data
        document.getElementById('response').innerHTML = `
            <p>ID: ${result.id}</p>
            <p>Name: ${result.name}</p>
            <p>Email: ${result.email}</p>
            <p>Age: ${result.age}</p>
        `;
    })
    .catch(error => console.error('Error:', error));
});
