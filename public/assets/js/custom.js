document.addEventListener('DOMContentLoaded', () => {
    const customSelect = document.querySelector('.custom-select');
    const selectTrigger = customSelect.querySelector('.select-trigger');
    const customOptions = customSelect.querySelector('.custom-options');

    selectTrigger.addEventListener('click', () => {
        customSelect.classList.toggle('open');
    });

    customOptions.addEventListener('click', (event) => {
        if (event.target.tagName === 'INPUT') {
            const checkedOptions = customSelect.querySelectorAll('input[type="checkbox"]:checked');
            const selectedValues = Array.from(checkedOptions).map(option => option.value).join(', ');
            selectTrigger.textContent = selectedValues || 'Select options';
        }
    });

    document.addEventListener('click', (event) => {
        if (!customSelect.contains(event.target)) {
            customSelect.classList.remove('open');
        }
    });
});
