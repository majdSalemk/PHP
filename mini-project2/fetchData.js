document.addEventListener('DOMContentLoaded', async function() {
    const userTable = document.getElementById('userTable').querySelector('tbody');

    try {
        const response = await fetch('allData.php');
        const data = await response.json();
        
        if (data.hasOwnProperty('data')) {
            data.data.forEach(user => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.firstname}</td>
                    <td>${user.middlename}</td>
                    <td>${user.lastname}</td>
                    <td>${user.familyname}</td>
                    <td>${user.email}</td>
                    <td>${user.phonenumber}</td>
                    <td>${user.password}</td>
                `;
                userTable.appendChild(row);
            });
        } else {
            const errorRow = document.createElement('tr');
            errorRow.innerHTML = `<td colspan="7">${data.error || 'No data available'}</td>`;
            userTable.appendChild(errorRow);
        }
    } catch (error) {
        console.error('Error fetching data:', error);
    }
});