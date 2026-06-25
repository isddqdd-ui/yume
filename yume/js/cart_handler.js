document.addEventListener('DOMContentLoaded', () => {
    const addButtons = document.querySelectorAll('.btn-add');
    const badge = document.querySelector('.cart-count-badge');

    addButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const dishId = button.getAttribute('data-id');

            // Создаем форму данных для отправки в PHP
            const formData = new FormData();
            formData.append('dish_id', dishId);

            // Отправляем AJAX-запрос на бэкенд
            fetch('../php/add_to_cart.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Динамически обновляем красный кружок над корзиной в HEADER.php
                    if (badge) {
                        badge.textContent = data.total_count;
                    }
                    alert('Успешно добавлено в корзину!');
                } else if (data.status === 'unauthorized') {
                    alert('Для заказа необходимо авторизоваться!');
                    window.location.href = 'login.php';
                } else {
                    alert('Произошла ошибка при добавлении товара.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});