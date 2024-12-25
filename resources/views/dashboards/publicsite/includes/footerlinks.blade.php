    <script>
            document.addEventListener("DOMContentLoaded", () => {
               const links = document.querySelectorAll('.nav-link');
               const icons = document.querySelectorAll('.nav-link i');
               const sections = document.querySelectorAll('section');

               const setActiveLink = () => {
                    let currentSection = '';

                    sections.forEach(section => {
                         const sectionTop = section.offsetTop;
                         const sectionHeight = section.offsetHeight;

                         if (window.scrollY >= sectionTop - sectionHeight / 3) {
                              currentSection = section.getAttribute('id');
                         }
                    });

                    links.forEach((link, index) => {

                         link.classList.remove('bg-gradient-to-tl', 'from-lime-900', 'via-lime-700', 'to-lime-900', 'text-black');
                         icons[index].classList.remove('text-black');

                         if (link.getAttribute('href').slice(1) === currentSection) {
                              link.classList.add('bg-gradient-to-tl', 'from-lime-900', 'via-lime-700', 'to-lime-900', 'text-black');
                              icons[index].classList.add('text-black');
                         } else {
                              icons[index].classList.add('text-white');
                         }
                    });
               };

               setActiveLink();


               window.addEventListener('scroll', setActiveLink);
            });
     </script>