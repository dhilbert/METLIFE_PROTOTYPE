// const workBtnContainer = document.querySelector('.work-categories');
// const projectContainer = document.querySelector('.work-projects');
// const projects = document.querySelectorAll('.project');


// workBtnContainer.addEventListener('click', (e) => {
//     const filter = e.target.dataset.filter || e.target.parentNode.dataset.filter;

//     if(filter == null) {
//         return;
//     }

//     const active = document.querySelector('.category__btn.selected');
//     active.classList.remove('selected');
//     const target = e.target.nodeName === 'BUTTON' ? e.target : e.target.parentNode;
//     target.classList.add('selected');

//     setTimeout(() => {
//         projects.forEach((project) => {
//             if( filter === project.dataset.type ) {
//                 project.classList.remove('invisible');
//             } else {
//                 project.classList.add('invisible');
//             }
//         });
//     }, 300);
// });

const slickContainer = document.querySelector('.slick-track.tp2');
const slickItem = document.querySelectorAll('.article-list-wrapper.tp2');

slickContainer.addEventListener('click', (e) => {
    const filter = e.target.dataset.filter || e.target.parentNode.dataset.filter;
    const active = document.querySelector('.category__btn.selected');

    active.classList.remove('selected');
    const target = e.target.nodeName === 'BUTTON' ? e.target : e.target.parentNode;
    target.classList.add('selected');

    console.log(slickItem, 'slickItem')
    setTimeout(() => {
        slickItem.forEach((project) => {
            if( filter === project.dataset.type ) {
                project.classList.remove('invisible');
            } else {
                project.classList.add('invisible');
            }
        });
    }, 300);
    console.log('click')
});
