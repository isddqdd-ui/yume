/* ==========================================================================
   1. ЛОГИКА ИНТЕРАКТИВНОГО АККОРДЕОНА (FAQ)
   ========================================================================== */
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq__item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq__question');
        const answer = item.querySelector('.faq__answer');

        question.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');

            // Закрываем все остальные открытые вкладки при клике на новую
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('open');
                const otherAnswer = otherItem.querySelector('.faq__answer');
                if (otherAnswer) {
                    otherAnswer.style.display = 'none';
                }
            });

            // Если вкладка была закрыта — плавно открываем её
            if (!isOpen) {
                item.classList.add('open');
                answer.style.display = 'block';
            }
        });
    });
});



Number.prototype.clamp = function(min, max) {
    return Math.min(Math.max(this, min), max);
};

document.querySelectorAll('.bt_plus').forEach(e => {
    e.onclick = (event) => {
        const input = event.currentTarget.parentNode.querySelector('.quantity');
        input.value = (Number(input.value) + 1).clamp(1, 20);
    }
});

document.querySelectorAll('.bt_minus').forEach(e => {
    e.onclick = (event) => {
        const input = event.currentTarget.parentNode.querySelector('.quantity');
        input.value = (Number(input.value) - 1).clamp(1, 20);
    }
});

const inputs = document.querySelectorAll('input[type="number"], .quantity');
Array.from(inputs).forEach(input => {
    const min = input.min ? +input.min : 1;
    const max = input.max ? +input.max : 20;

    input.addEventListener('input', (e) => {
        const value = +input.value;
        if (value > max) { 
            input.value = max; 
        } else if (value < min) { 
            input.value = min; 
        }
    });
});