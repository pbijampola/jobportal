
const tabs = Array.from(document.querySelectorAll('form .tab'));
const nextBtn = document.querySelectorAll('form .next-btn');
const prev = document.querySelectorAll('form .prev-btn');
const form = document.querySelectorAll('form')
const progress= ()=>{
    const progressBar=document.querySelector('.progress')
    progressBar.setAttribute('id','animation')
}

// Event Listener For Button
nextBtn.forEach(button => {
    button.addEventListener('click',()=>{
        changeTab('Next')
    })

prev.forEach(button=>{
    button.addEventListener('click',()=>{
        changeTab('Prev')
    })
})
   function changeTab(btn){
    var currentTab=0;
    const active=document.querySelector('form .tab.active');
    currentTab=tabs.indexOf(active);
    tabs[currentTab].classList.remove('active');
    if(btn=='Next'){
        currentTab ++;
    }
    else if(btn=='Prev'){
        currentTab --;
    }
    tabs[currentTab].classList.add('active');
    // console.log(currentTab);
   }
});


