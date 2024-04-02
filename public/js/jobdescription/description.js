document.addEventListener('DOMContentLoaded', function(){

    let applyBtn = document.querySelector('.button-apply #appylyNow');
    let close_job_modal = document.querySelector('.close_modal')

    let overlay = document.querySelector('.overlay-job')
    let modal = document.querySelector('.job_modal');

    function applyNow(){

        if(overlay && modal){
           overlay.style.display = "block";
           modal.classList.add("job_modal_display")
        }
    }

    function closeModal(){
        if(overlay && modal){
            overlay.style.display = "none";
            modal.classList.remove("job_modal_display")
         }
    }

    applyBtn.addEventListener('click', applyNow)
    close_job_modal.addEventListener('click', closeModal)
})