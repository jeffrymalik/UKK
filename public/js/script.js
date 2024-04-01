const likeButtons = document.querySelectorAll('.like-button');

likeButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const likesCount = button.previousElementSibling;
        let count = parseInt(likesCount.textContent);
        count++;
        likesCount.textContent = count.toString();
    });
});