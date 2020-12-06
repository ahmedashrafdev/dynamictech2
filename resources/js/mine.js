
toggleInput = (slug , dir) => {
    const item = document.querySelector(`#${slug}`);
    const form = document.querySelector(`#${slug}_form`);
    const btn = document.querySelector(`#${slug}_btn`);
    if(dir) {
        item.classList.add('hidden')
        btn.classList.add('hidden')
        form.classList.remove('hidden')
        return
    }
    form.classList.add('hidden')
    item.classList.remove('hidden')
    btn.classList.remove('hidden')

    return
}
document.addEventListener('DOMContentLoaded', function() {
    
  
    const homeAbout = document.querySelector('#home_about');
    const homeAboutBtn = document.querySelector('#home_about_btn');
    const homeAboutCancel = document.querySelector('#home_about_cancel');
    const aboutArea = document.querySelector('.about-area3 .overlay');

    const homeAboutImagesBtn = document.querySelector('#home_about_images_btn');
    console.log(homeAboutImagesBtn)

    homeAbout.addEventListener('dblclick' , () => {
        toggleInput('home_about' , true)
    })
    homeAboutBtn.addEventListener('click' , () => {
        // console.log(homeAbout)
        toggleInput('home_about' , true)
    })
    homeAboutImagesBtn.addEventListener('click' , () => {
        // console.log(homeAbout)
        toggleInput('home_about_images' , true)
    })
    aboutArea.addEventListener('click' , () => {
        toggleInput('home_about' , false)
    })
    homeAboutCancel.addEventListener('click' , () => {
        toggleInput('home_about' , false)
    })
    console.log(homeAbout);
}, false);