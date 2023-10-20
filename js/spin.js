// thid is a loading spinner
  let loadbtn= document.querySelector('#resume')
  let deg=0 

  loadbtn.addEventListener('mouseover', stary)
  function stary(){
    let alertbtn=    document.getElementById('alertbtn')
    if( alertbtn.textContent==''){
      alertbtn.textContent="download Evansdev's c.v click here..."
      alertbtn.style.backgroundColor='white'
    }else{
      alertbtn.textContent=''
      alertbtn.style.background='none'
    }
  
  }

let icons= document.querySelectorAll('.bi')

icons.forEach(icon=>{
icon.addEventListener('mouseover',()=>{
  icon.style.opacity='0.3' 
})
icon.addEventListener('mouseout',()=>{
  icon.style.opacity='1' 
})
})
  
 
