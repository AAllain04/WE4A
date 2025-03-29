document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search');
    const sortSelect = document.getElementById('sort');
    const coursesContainer = document.getElementById('courses-container');
    const courseCards = coursesContainer.querySelectorAll('.col');

    function filterCourses() {
        const searchTerm = searchInput.value.toLowerCase();
        const sortValue = sortSelect.value;

        // Convertir NodeList en Array pour pouvoir le trier
        const courseArray = Array.from(courseCards);

        // Filtrer
        const filteredCourses = courseArray.filter(card => {
            const courseTitle = card.dataset.courseTitle.toLowerCase();
            return courseTitle.includes(searchTerm);
        });

        // Trier
        if (sortValue === 'alphabetique') {
            filteredCourses.sort((a, b) =>
                a.dataset.courseTitle.localeCompare(b.dataset.courseTitle)
            );
        }

        // Réorganiser les cartes
        coursesContainer.innerHTML = '';
        filteredCourses.forEach(card => coursesContainer.appendChild(card));
    }

    searchInput.addEventListener('input', filterCourses);
    sortSelect.addEventListener('change', filterCourses);
});