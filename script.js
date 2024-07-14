document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_users.php')
        .then(response => response.json())
        .then(data => {
            const userList = document.getElementById('user-list');
            data.forEach(user => {
                const userCard = document.createElement('div');
                userCard.className = 'user-card';

                userCard.innerHTML = `
                    <h2>${user.name}</h2>
                    <p><strong>Email:</strong> ${user.email}</p>
                    <p><strong>Telefone:</strong> ${user.phone}</p>
                `;

                userList.appendChild(userCard);
            });
        })
        .catch(error => console.error('Erro ao buscar os usuários:', error));
});