function addUser () {
    const formData = new FormData(document.getElementById('userForm'));
    fetch('/api/users', {
        method: 'POST',
        body: formData,
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        fetchUsers(); // Refresh the user list
        closeModal(); // Close the modal
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}